@extends('_layouts.master')

@section('title', 'What We Do')

@section('content')
<div class="container">
    <div class="gallery-section">
    <div class="gallery-grid">  
        <div class="item-container">
        <img class="item" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/529582/All-Sports-Lift-Kits.jpg" />
        <h3 class="item-name">AllSportsLiftKits.com</h3>
        <p class="item-description">Golf Cart Parts & Accessories Manufactuer</p>
        <a target="_blank" href="http://allsportsliftkits.com"><div class="btn btn-green btn-small">View Site</div></a>
        </div>
        <div class="item-container">
        <img class="item" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/529582/Poppies%20Salon-screen-shot.jpg" />
        <h3 class="item-name">Poppiesilashery.com</h3>
        <p class="item-description">Beauty Salon</p>
        <a target="_blank" href="https://poppies-dev.netlify.com/"><div class="btn btn-green btn-small">View Site</div></a>
        </div>
        <div class="item-container">
        <img class="item" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/529582/All-Sports-Lift-Kits.jpg" />
        <h3 class="item-name">Coming Soon</h3>
        <p class="item-description">Coming Soon</p>
        <a target="_blank" href="/"><div class="btn btn-green btn-small">View Site</div></a>
        </div>
    </div>
    </div>
</div>
@endsection