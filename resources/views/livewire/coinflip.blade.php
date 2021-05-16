<div>
    <h1 class="text-2xl">coinflip!</h1>
    <button wire:click="flip" type="button" class="bg-gray-400 p-2 rounded-lg">Flip!</button>
    <button wire:click="auto" type="button" class="bg-gray-400 p-2 rounded-lg">Auto until 10 Streak!</button>

    <p> Number of Heads: {{isset($results_split[0]) ? $results_split[0] : 0}}</p>
    <p> Number of Tails: {{isset($results_split[1]) ? $results_split[1] : 0}}</p>
    <p> Number of Flips: {{$number_of_flips}} </p>
    <p> Streak: {{$streak}} </p>

    @if ($last_ten)
        <table>
            <thead>
                <th>Last Ten:</th>
            </thead>
            <tbody>
                @foreach($last_ten as $res)
                    <tr>
                        <td>{{$res == 0 ? 'Heads' : 'Tails'}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
