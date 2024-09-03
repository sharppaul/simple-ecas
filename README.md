# Simple ECAS test

This project uses https://github.com/apereo/phpCAS, which is unmaintained since last June (2024). This shouldn't matter for the test. 

## Test isn't completed.

I haven't been able to completely test the CAS-authentication flow. This is because I dont have a valid service URL, and I send whatever URL this script is hosted on to the ECAS. (See cas_settings.php, $service_base_url)

If you do have a valid service URL, please let me know if you get further than the ECAS page that says: "You are using an invalid service to access EU Login: https://service.url/endpoint"

