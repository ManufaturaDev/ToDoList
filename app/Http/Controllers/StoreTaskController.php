<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Services\ToDoList\Contracts\StoreTaskServiceContract;
use Illuminate\Support\Facades\Log;

class StoreTaskController extends Controller
{
    /**
     * Contruct function to put files on board
     */
    public function __construct(protected StoreTaskServiceContract $service) 
        {
    
        }

    /**
     * Summary of __invoke
     * 
     * @return RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {

        try{

            $this->service->store($request->all());

        }catch(\Exception $e){

            Log::critical('Unexpected error in '.self::class, [
                'exception' => $e,
                'code' => 'store_unexpected_error',
                'service' => 'StoreTaskController',
            ]);
        }

        return redirect(route('to_do_list.list'));
    }
}
