<?php


namespace App\Models_Overloaded;


use Illuminate\Database\Eloquent\Model;

class ModelHug extends Model
{
    public function beforeSave()
    {
        // same code before save;
    }

    public function afterSave()
    {
        // same code after save;
    }

    public function save(array $options = [])
    {
        $this->beforeSave();

        parent::save($options);

        $this->afterSave();
    }
}
