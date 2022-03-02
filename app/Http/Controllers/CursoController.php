<?php

namespace App\Http\Controllers;

use App\Models\Curso;
// use App\Http\Requests\StoreCurso as RequestsStoreCurso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;


class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        // $cursos = Curso::all();
        // return $cursos;
        return view('cursos.index', compact('cursos'));
        
    }

    public function create(){
        return view('cursos.create');
    }

    public function store( StoreCurso $request){
    // public function store(Request $request){  VIDEO 14
        // return $request->all(); 
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'descripcion' => 'required|min:10',   //se paso a StoreCurso
        //     'categoria' => 'required' 
        // ]);
        // ----------------------------------------------------------------------------
        // $curso = new Curso();                          ESTE
        // $curso->name = $request->name;                 ESTE
        // $curso->descripcion = $request->descripcion;   ESTE
        // $curso->categoria = $request->categoria;       ESTE
        // // return $curso;
        // $curso->save();                                ESTE
        
        // $curso = Curso::create([ //esto hace lo mismo que arriba,lo manda y lo salva
        //     'name' => $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' => $request->categoria
        // ]);

        $curso = Curso::create($request->all());   //esta es una forma dinamica

        return redirect()->route('cursos.show', $curso);
        // return redirect()->route('cursos.show', $curso->id);  no hay necesidad
    }
    public function show(Curso $curso){     //uñtimo
    // public function show($id){      //penultimo
    // return view('cursos.show', ['curso' => $curso]);
        // $curso = Curso::find($id);   //penultimo
        // return $curso;
        return view('cursos.show', compact('curso'));

    }

    // public function edit($id){       //primero
    // public function edit(curso $id){   //segundo
    public function edit(curso $curso){   //tercero
        // return $id;                   //segundo
        // return $curso;                  //tercero
        // $curso = Curso::find($id);  //primero
        // return $curso;              //primero 

        return view('cursos.edit', compact('curso'));


    }

    public function update(Request $request ,Curso $curso){
        // return $curso;
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required' 
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // // return $curso;
        // $curso->save();

        $curso->update($request->all());
        return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso ){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
