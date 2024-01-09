<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NullResource extends JsonResource
{
    public static $wrap = null;

    public function __construct(protected string $entity = "entry")
    {
        parent::__construct(null);
    }


    public function toArray($request) : array
    {
        return [
            "message" => "We could not find an {$this->entity} for the given details."
        ];
    }

    public function withResponse($request, $response) : void
    {
        $response->setStatusCode(404);

        parent::withResponse($request, $response); // TODO: Change the autogenerated stub
    }
}
