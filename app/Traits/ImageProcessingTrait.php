<?php

namespace App\Traits;

trait ImageProcessingTrait
{
    public function processImageAndData($request, $data, $folder)
    {
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/' . $folder), $imageName);
            $data['img'] = $imageName;
        }

        return $data;
    }
}