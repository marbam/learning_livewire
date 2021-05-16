<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Coinflip extends Component
{
    public $result = 0;
    public $results = [];
    public $state = 'stop';
    public $results_split = [0 => 0, 1 => 0];
    public $number_of_flips = 0;
    public $last_result = null;
    public $streak = 0;
    public $last_ten = [];

    public function render()
    {
        return view('livewire.coinflip');
    }

    public function auto() {
        $this->resetProps();
        while ($this->streak != 10) {
            $this->flip();
        }
    }

    public function resetProps() {
        $this->result = 0;
        $this->results = [];
        $this->state = 'stop';
        $this->results_split = [0 => 0, 1 => 0];
        $this->number_of_flips = 0;
        $this->last_result = null;
        $this->streak = 0;
        $this->last_ten = [];
    }

    public function flip()
    {
        $this->result = rand(0, 1);
        $this->results[] = $this->result;
        $this->results_split = array_count_values($this->results);
        $this->number_of_flips++;

        if ($this->number_of_flips) {
            if ($this->last_result == $this->result) {
                $this->streak++;
            } else {
                $this->streak = 1;
            }
        }

        if (count($this->last_ten) == 10) {
            array_shift($this->last_ten);
        }
        $this->last_ten[] = $this->result;

        $this->last_result = $this->result;
    }
}
