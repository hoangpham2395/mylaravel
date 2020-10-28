<?php

namespace App\Model\Presenters\Base;

use App\Model\Scopes\Base\BaseScope;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletingScope;

trait BaseSoftDeletes
{
    use SoftDeletes;

    public static function bootSoftDeletes()
    {
        if (isSoftDeletesDefault()) {
            static::addGlobalScope(new SoftDeletingScope);
        } else {
            static::addGlobalScope(new BaseScope);
        }
    }

    public function getDeletedAtColumn()
    {
        $fieldName = isSoftDeletesDefault() ? 'deleted_at' : getConstant('DEL_FLAG.FIELD');
        return defined('static::DELETED_AT') ? static::DELETED_AT : $fieldName;
    }

    protected function runSoftDelete()
    {
        $query = $this->setKeysForSaveQuery($this->newModelQuery());

        $time = $this->freshTimestamp();
        $fromDateTime = $this->fromDateTime($time);
        $valueDeleted = getConstant('DEL_FLAG.DELETED');

        $columns = [$this->getDeletedAtColumn() => isSoftDeletesDefault() ? $fromDateTime : $valueDeleted];
        $this->{$this->getDeletedAtColumn()} = isSoftDeletesDefault() ? $time : $valueDeleted;

        if ($this->timestamps && ! is_null($this->getUpdatedAtColumn())) {
            $this->{$this->getUpdatedAtColumn()} = $time;
            $columns[$this->getUpdatedAtColumn()] = $fromDateTime;
        }

        $query->update($columns);
        $this->syncOriginalAttributes(array_keys($columns));
    }

    public function restore()
    {
        // If the restoring event does not return false, we will proceed with this
        // restore operation. Otherwise, we bail out so the developer will stop
        // the restore totally. We will clear the deleted timestamp and save.
        if ($this->fireModelEvent('restoring') === false) {
            return false;
        }

        $this->{$this->getDeletedAtColumn()} = isSoftDeletesDefault() ? null : getConstant('DEL_FLAG.ACTIVE');

        // Once we have saved the model, we will fire the "restored" event so this
        // developer will do anything they need to after a restore operation is
        // totally finished. Then we will return the result of the save call.
        $this->exists = true;

        $result = $this->save();

        $this->fireModelEvent('restored', false);

        return $result;
    }

    public function trashed()
    {
        if (isSoftDeletesDefault()) {
            return ! is_null($this->{$this->getDeletedAtColumn()});
        }

        return $this->{$this->getDeletedAtColumn()} == getConstant('DEL_FLAG.DELETED');
    }
}
