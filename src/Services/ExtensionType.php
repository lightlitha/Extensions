<?php

namespace Faceless\Extensions\Services;

use Illuminate\Http\Request;
use Faceless\Extensions\Models\ExtensionType as ExtensionTypeModel;
use Illuminate\Support\Arr;

trait ExtensionType
{

  public function browse(Request $request, $limitter = 10)
  {
    $searchParams = $request->all();
    $limit = Arr::get($searchParams, 'limit', $limitter);
    $keyword = Arr::get($searchParams, 'keyword', '');

    $extensions = ExtensionTypeModel::all();

    return $extensions;
  }
}
