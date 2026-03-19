<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use App\Services\ToDoList\Contracts\UpdateTaskServiceContract;

class UpdateTaskController extends Controller
{
     /**
     * Contruct function to put files on board
     */
    public function __construct(protected UpdateTaskServiceContract $service) {
    }

    /**
     * Summary of __invoke
     * 
     * @return RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {
        try{

            $sport = $this->service->update($request->all());

        }catch(\Exception $e){

            Log::critical('Unexpected error in '.self::class, [
                'exception' => $e,
                'code' => 'Update_Sport_unexpected_error',
                'service' => 'SportUpdateController',
            ]);
        }

        return redirect(route('to_do_list.list'));
    }
}
