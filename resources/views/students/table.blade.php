
<tr>
    <td>{{ $student->firstname }} {{ $student->lastname }}</td>
    <td>{{ $student->email }}</td>
    <td  class="right-align">
        <a href="{{ URL::action("StudentsController@show", $student->id) }}" title="Voir l'étudiant"><button class="btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
        <a href="{{ URL::action("StudentsController@edit", $student->id) }}" title="Voir l'étudiant"><button class="btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['/years', $student->id],
            'style' => 'display:inline'
        ]) !!}
        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                'type' => 'submit',
                'class' => 'btn red',
                'title' => 'Supprimer l\'année',
                'onclick'=>'return confirm("Confirm delete?")'
        )) !!}
        {!! Form::close() !!}
    </td>
</tr>