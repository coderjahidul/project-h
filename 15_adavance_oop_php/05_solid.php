<?php
// Dependency Inversion Principle

// This is bad way
// class Authenticator {
//     function authenticate($username, $password, $external = false, $externalService=false){
//         if($external == false && 'goolge' == $externalService){
//             $ga = new GoogleAuthenticator();
//             $ga->authenticate();
//         }elseif($external == true && 'github' == $externalService){
//             $ga = new GitHubAuthenticator();
//             $ga->authenticate();
//         }else{
//             $ga = new LocalAuthenticator();
//             $ga->authenticate();
//         }
//     }
// }


// Right way
interface AuthenticatorInterface {
    function authenticate($username, $password);
}

class Authenticator{
    private AuthenticatorInterface $authenticator;

    function __construct(AuthenticatorInterface $authenticator){
        $this->authenticator = $authenticator;
    }

    function authenticate($username, $password){
        $this->authenticator->authenticate($username, $password);
    }
}

class GoogleAuthenticator implements AuthenticatorInterface {
    function authenticate($username, $password){
        echo "Authenticating via Google for user: $username\n";
        return true;
    }
}

class GitHubAuthenticator implements AuthenticatorInterface {
    function authenticate($username, $password){
        echo "Authenticating via GitHub for user: $username\n";
        return true;
    }
}

class LocalAuthenticator implements AuthenticatorInterface {
    function authenticate($username, $password){
        echo "Authenticating locally for user: $username\n";
        return true;
    }
}

// Usage
$username = 'exampleUser';
$password = 'examplePass';

$ga = new GoogleAuthenticator();
$auth = new Authenticator($ga);
if ($auth->authenticate($username, $password)) {
    echo "Google Authentication successful.\n";
} else {
    echo "Google Authentication failed.\n";
}

$la = new LocalAuthenticator();
$auth = new Authenticator($la);
if ($auth->authenticate($username, $password)) {
    echo "Local Authentication successful.\n";
} else {
    echo "Local Authentication failed.\n";
}