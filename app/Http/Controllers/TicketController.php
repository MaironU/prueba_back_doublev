<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::paginate(10);
        return $this->successResponse($tickets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketRequest $request)
    {
        try{
            DB::beginTransaction();
            Ticket::create($request->all());

            DB::commit();
            return $this->showMessage('Ticket Creado correctamente');
        }catch(\Exception $e){
            DB::rollback();
            return $this->errorResponse('Hubo un error al crear el ticket', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $ticket = Ticket::findOrFail($id);
            return $this->successResponse($ticket);
        }catch(ModelNotFoundException $e){
            return $this->errorResponse('Ticket no encontrado', 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $ticket = Ticket::findOrFail($id);
            $ticket->update($request->only('user', 'status'));

            return $this->showMessage('Ticket Actualizado correctamente');
        }catch(ModelNotFoundException $e){
            return $this->errorResponse('Ticket no encontrado', 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $ticket = Ticket::findOrFail($id);
            $ticket->delete();

            return $this->showMessage('Ticket Eliminado correctamente');
        }catch(ModelNotFoundException $e){
            return $this->errorResponse('Ticket no encontrado', 404);
        }
    }
}
