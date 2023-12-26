<div class="LandingPageWrapper">
    @include('components.navbar')
    <div class="formWrapper">
        <form class="FreelancerForm" method="post" action="{{ route('employer.store') }}">
            @csrf
            <h1>Freelancer Registration</h1>
            <input type="text" name="company_name" placeholder="Company Name" required>
            <input type="text" name="employer_name" placeholder="Employer Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="text" name="city_country" placeholder="City/Country" required>
            <input type="text" name="url" placeholder="url" required>
            <input type="submit" value="Register">
        </form>
    </div>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
