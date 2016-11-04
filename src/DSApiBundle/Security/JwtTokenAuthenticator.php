<?php
namespace DSApiBundle\Security;

use Doctrine\ORM\EntityManager;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\HttpFoundation\JsonResponse;

class JwtTokenAuthenticator extends AbstractGuardAuthenticator
{
    private $jwtEncoder;
    private $em;
    
     public function __construct(JWTEncoderInterface $jwtEncoder, EntityManager $em)
    {
       
         $this->jwtEncoder = $jwtEncoder;
         $this->em = $em;
         
         

    }
    public function getCredentials(Request $request)
    {
        $extractor = new AuthorizationHeaderTokenExtractor(
            'Bearer',
            'Authorization'
        );
        
        $token = $extractor->extract($request);
        
        if( !$token){
            return;
        }
        
        return $token;

    }
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $data = $this->jwtEncoder->decode($credentials);
        
        if( $data == false)
        {
            throw new CustomUserMessageAuthenticationException('Invalid Token');
        }
        
        $username = $data['username'];
        
        return $this->em
                    ->getRepository('DSApiBundle:User')
                    ->findOneBy(['username' => $username]);
    }
    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
  
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        
    }
    public function supportsRememberMe()
    {
       return false;
    }
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = array(
            'message' => 'Authentication Required'
        );

        return new JsonResponse($data, 401);
    
    }

}