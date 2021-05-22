

        <table class="table table-sm">
            <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nimi</th>
                <th scope="col">Sukunimi</th>
                <th scope="col">Ikä</th>
                <th scope="col">Tiedot</th>
                <th scope="col">Tehtävät</th>
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

                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Päivitä</a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>




