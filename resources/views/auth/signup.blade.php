<x-guest-layout title="Sing Up" bodyClass="page-signup" pageTitle="Signup">
                <div class="form-group">
                    <input type="email" placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Your Password" />
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Repeat Password" />
                </div>
                <hr />
                <div class="form-group">
                    <input type="text" placeholder="First Name" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Last Name" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone" />
                </div>
                <button class="btn btn-primary btn-login w-full">Register</button>
                <x-slot:goTo>
                    Already have an account? -
                    <a href="/login.html"> Click here to login </a>
                </x-slot:goTo>
</x-guest-layout>
