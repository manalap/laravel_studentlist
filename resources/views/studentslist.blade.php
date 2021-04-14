

        <table class="table table-sm">
            <thead class="table-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>

            @foreach($students as $student)
                <tr>

                    <td>{{ $student->cne }} </td>
                    <td>{{ $student->FirstName }} </td>
                    <td>{{ $student->SecondName }} </td>
                    <td>{{ $student->age }} </td>
                    <td>{{ $student->Speciality }} </td>
                    <td>

                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>




