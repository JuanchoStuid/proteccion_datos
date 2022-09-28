<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Corporativo;
use App\Models\FormularioDatoPersonal;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cliente($campo = null, $enlace = null)
    {
        if (!empty($campo) || !empty($enlace)) {
            // $corporativo = Corporativo::where($campo, $enlace)->with('sectores')->first();
            // $query->where($campo, $enlace);

            $corporativo = Corporativo::with(['sectores' => function ($query) {
                $query->with('clausulas', 'formularios');
            }])->where($campo, $enlace)->first();

            $total = DB::table('corporativos')
                ->where($campo, '=', $enlace)
                ->count();
                
            // return DataTables($libros)->make(true);
            // return $libros;
            // return response()->json([
            //     'data' => $corporativo,
            //     'total' => $total,
            // ]);
            return view('cliente', compact('corporativo'));
        }else {
            return 'No existe el parametro o el enlace para redireccionar contactese con su administrador';
        }
        
    }

    public function cliente1($campo = null, $enlace = null)
    {
        if (!empty($campo) || !empty($enlace)) {
            // $corporativo = Corporativo::where($campo, $enlace)->with('sectores')->first();
            // $query->where($campo, $enlace);

            $corporativo = Corporativo::with(['sectores' => function ($query) {
                $query->with('clausulas', 'formularios');
            }])->where($campo, $enlace)->first();
            return $corporativo;

            $total = DB::table('corporativos')
                ->where($campo, '=', $enlace)
                ->count();
                
            // return DataTables($libros)->make(true);
            // return $libros;
            // return response()->json([
            //     'data' => $corporativo,
            //     'total' => $total,
            // ]);
            return view('cliente', compact('corporativo'));
        }else {
            return 'No existe el parametro o el enlace para redireccionar contactese con su administrador';
        }
        
    }

    public function create($campo = null, $enlace = null)
    {
        if (!empty($campo) || !empty($enlace)) {
            // $corporativo = Corporativo::where($campo, $enlace)->with('sectores')->first();
            // $query->where($campo, $enlace);

            $corporativo = Corporativo::with(['sectores' => function ($query) {
                $query->with('clausulas', 'formularios');
            }])->where($campo, $enlace)->first();

            $total = DB::table('corporativos')
                ->where($campo, '=', $enlace)
                ->count();
                
            // return DataTables($libros)->make(true);
            // return $libros;
            // return response()->json([
            //     'data' => $corporativo,
            //     'total' => $total,
            // ]);
            return view('formulario', compact('corporativo'));
        }else {
            return 'No existe la vista contactese con su administrador';
        }
        
    }

    public function store(Request $request)
    {
        // $user = $request->user();

        $formulario = new FormularioDatoPersonal([
          //'fdp_id' => $request->get('fdp_id'),
          'fdp_identificacion' => $request->get('fdp_identificacion'),
          'fdp_nombres' => $request->get('fdp_nombres'),
          'fdp_apellidos' => $request->get('fdp_apellidos'),
          'fdp_direccion' => $request->get('fdp_direccion'),
          'fdp_ciudad' => $request->get('fdp_ciudad'),
          'fdp_correo' => $request->get('fdp_correo'),
          'fdp_numero_celular' => $request->get('fdp_numero_celular')
        ]);

        $formulario->save();

        if ($formulario) {
            return back()->with('status', 'El empleado se creo con exito');
        }

        return back()->withErrors(['msg', 'Ha ocurrido un error intente mas tarde']);

        // return redirect('/empleados');
    }
}
