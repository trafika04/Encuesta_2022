<?php

namespace App\Http\Controllers;

use App\Empresas;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $empresas = Empresas::all();
            return DataTables()->of($empresas)
                ->addColumn('action', function($empresas){
                    $button = '<button type="button" name="edit" data-id="'.$empresas->id.'"  data-toggle="modal" data-target="#editEmpresa" title="Editar empresa" class="edit btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="'.$empresas->id.'" title="Eliminar empresa" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a href="#" title="Ver graficos y reportes" class="btn btn-primary btn-sm"><i class="fas fa-chart-pie"></i></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a href="'.'/empresa/'.$empresas->token.'" target="_blank" title="Ver empresa" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.empresas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'nombre' => 'required',
            'logo' => 'required|image',
            'imagen_fondo' => 'required|image',
            'descripcion' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors(), 'status'=>'failed']);
        }else {
            $logo = $request->logo->store('logos', 'public');
            $img_1 = Image::make(public_path("storage/{$logo}"))->fit(300, 300);
            $img_1->save();

            $img_fondo = $request->imagen_fondo->store('imagenes_fondo', 'public');
            $img_2 = Image::make(public_path("storage/{$img_fondo}"))->fit(1920, 1080);
            $img_2->save();

            $empresas = new Empresas;
            $empresas->token = $request->token;
            $empresas->nombre = $request->nombre;
            $empresas->logo = $logo;
            $empresas->imagen_fondo = $img_fondo;
            $empresas->colores_principales = $request->colores_principales;
            $empresas->descripcion = $request->descripcion;
            $empresas->activo = $request->activo;
            if(isset($request->tipo_puesto)){
                $tipo_puesto = array();
                // Recorrer con un ciclo for para obtener los valores
                for($i = 0; $i < $request->tipo_puesto; $i++){
                    array_push($tipo_puesto, $_POST['summaryPuesto_'.$i]);
                }
            }
            $empresas->tipo_puesto = json_encode($tipo_puesto);
            if(isset($request->area)){
                $area = array();
                // Recorrer con un ciclo for para obtener los valores
                for($i = 0; $i < $request->area; $i++){
                    array_push($area, $_POST['summaryArea_'.$i]);
                }
            }
            $empresas->area = json_encode($area);
            $empresas->tipo_puesto = json_encode($tipo_puesto);
            if(isset($request->tipo_contratacion)){
                $tipo_contratacion = array();
                // Recorrer con un ciclo for para obtener los valores
                for($i = 0; $i < $request->tipo_contratacion; $i++){
                    array_push($tipo_contratacion, $_POST['summaryContratacion_'.$i]);
                }
            }
            $empresas->tipo_contratacion = json_encode($tipo_contratacion);
            if(isset($request->jornada_trabajo)){
                $jornada_trabajo = array();
                // Recorrer con un ciclo for para obtener los valores
                for($i = 0; $i < $request->jornada_trabajo; $i++){
                    array_push($jornada_trabajo, $_POST['summaryJornada_'.$i]);
                }
            }
            $empresas->jornada_trabajo = json_encode($jornada_trabajo);
            if(isset($request->rotacion_turnos)){
                $rotacion_turnos = array();
                // Recorrer con un ciclo for para obtener los valores
                for($i = 0; $i < $request->rotacion_turnos; $i++){
                    array_push($rotacion_turnos, $_POST['summaryRotacion_'.$i]);
                }
            }
            $empresas->rotacion_turnos = json_encode($rotacion_turnos);
            $empresas->save();
            return response()->json(['message' => 'Empresa creada correctamente.', 'empresa' => $empresas, 'status' => 'success']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresas $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresas $empresas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresas $empresas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresas = Empresas::find($id);
        $empresas->delete();
        return response()->json(['message' => 'Empresa eliminada correctamente.', 'status' => 'success']);
    }
}
