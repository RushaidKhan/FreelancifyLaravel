<div class="LandingPageWrapper">
    @include('components.navbar')
    <div class="ChooseProfession">
        <h1>Who are you?</h1>
        <div class="chooser">
            <a href="{{route('freelancer.store')}}">Freelancer</a>
            <a href="{{route('employer.store')}}">Employer</a>
        </div>
    </div>
</div>
