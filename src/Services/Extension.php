<?php

namespace Faceless\Extensions\Services;

use Illuminate\Http\Request;
use Faceless\Extensions\Models\Extension as ExtensionModel;
use Illuminate\Support\Arr;
use Faceless\Extensions\Resources\ExtensionResource;

trait Extension
{

  /**
   * 
   */
  public function browse(Request $request, $limitter = 10)
  {
    $searchParams = $request->all();
    $limit = Arr::get($searchParams, 'limit', $limitter);
    $keyword = Arr::get($searchParams, 'keyword', '');

    $extension = ExtensionModel::query();

    return ExtensionResource::collection($extension->paginate($limitter));
  }

  /**
   * 
   */
  public function read(ExtensionModel $extension)
  {
    return new ExtensionResource($extension);
  }
}
