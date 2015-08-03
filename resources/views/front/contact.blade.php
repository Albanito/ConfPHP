@extends('layouts.front')
@section('content')
    <aside>
        <h2>Laissez-nous un message</h2>
        <p><em>(*) champs obligatoires</em></p>
        <form>
            <p><label>(*)Email:</label><input type="text"></p>
            <p>Calculer la somme 5+8: <input type="text"></p>
            <h3>(*)commentaire:</h3>
            <textarea></textarea>
            <p><button>Valider</button></p>
        </form>
    </aside>
    @endsection

