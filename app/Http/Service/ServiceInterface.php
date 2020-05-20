<?php


namespace App\Http\Service;


interface ServiceInterface
{
    function getAll();

    function store($request);

    function edit($id);

    function update($id, $request);

    function destroy($id);

    function findById($id);
}
