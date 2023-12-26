<div class="LandingPageWrapper">
    @include('components.navbar')
    <div class="formWrapper">
        <form class="FreelancerForm" method="post" action="{{ route('freelancer.store') }}">
            @csrf
            <h1>Freelancer Registration</h1>
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="skills" placeholder="Skills" required>
            <input type="submit" value="Register">
        </form>
    </div>
</div>
