<?php

namespace Cristianhr\JsonMiniBreadHook;

use Illuminate\Support\Str;
use Cristianhr\JsonMiniBreadHook\Actions\JsonMiniBreadDeleteAction;
use Cristianhr\JsonMiniBreadHook\Actions\JsonMiniBreadEditAction;
use Cristianhr\JsonMiniBreadHook\Actions\JsonMiniBreadViewAction;
use TCG\Voyager\Models\DataRow;

class JsonMiniBreadHook
{
    private $actions = [
        JsonMiniBreadDeleteAction::class,
        JsonMiniBreadEditAction::class,
        JsonMiniBreadViewAction::class,
    ];

    public function makeHelper(DataRow $dataRow)
    {
        return new JsonMiniBreadHelper($dataRow);
    }

    public function getSlugSingular($value)
    {
        $value = Str::singular($value);

        return str_replace('-', '_', $value);
    }

    public function actions()
    {
        return $this->actions;
    }
}
