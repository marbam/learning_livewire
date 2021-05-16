<div>
    coinflip!
    <button wire:click="flip" type="button" class="bg-gray-400 p-2 rounded-lg">Flip!</button>
    <button wire:click="auto" type="button" class="bg-gray-400 p-2 rounded-lg">Auto!</button>


    <p> Number of Heads: {{isset($results_split[0]) ? $results_split[0] : 0}}</p>
    <p> Number of Tails: {{isset($results_split[1]) ? $results_split[1] : 0}}</p>
    <p> Number of Flips: {{$number_of_flips}} </p>
    <p> Streak: {{$streak}} </p>

    @foreach($last_ten as $res)
        <p>{{$res}} - {{$streak}} </p>
    @endforeach

</div>
