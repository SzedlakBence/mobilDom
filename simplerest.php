<?php
//szabalyok minta 
class simplerest
{
    private $httpVersion ='HTTP/1.1';

    public function setHttpHeaders($contentType,$statusCode)
    {
        $statusMessage= $this->getHttpMessage($statusCode);

        header($this->httpVersion . "" . $statusCode . "" . $statusMessage);
        header('Conten')
    }

    public function getHttpMessage($statusCode)
    {
        $httpStatus = array(
            200 => 'OKE',
            400 => 'Bad Request',
            404 => 'Not Found',
            500 => 'Internal Server Error'

        );
        return (isset([$statusCode])) 
        ? $httpStatus[$statusCode] : $httpStatus[500]; 
    }
}