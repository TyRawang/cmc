<?php
namespace app\Helpers;
use Config;
use \Session;


Class MailFunctions 
{
    public $name = null;
    public $config_data;
    public $subject;
    public $body;
    public $fromEmail;
    public $toEmail;
    public $auto = TRUE;
    public $headers = null;
    public $attached_file = null;
    public $print = false;
    function __construct() 
    {

        $conf_arr['website_title'] = 'Cargo Movers';
        $conf_arr['no_reply_email'] = 'no-reply@mailinator.com';
        $this->configs = (object) $conf_arr;
        $this->theme = "";
        Config::set("CONFIG_DATA", $this->configs);
        Config::set("CONFIG_THEME", $this->theme);
        $this->config_data = Config::get("CONFIG_DATA");
    }
    
    function setHeader()
    {
        if($this->auto)
        {
            $this->fromEmail = $this->config_data->no_reply_email;
        }
        else
        {
            $this->fromEmail = $this->config_data->admin_email;
            
        }
        
        if($this->name != null)
        {
            $this->name = $this->name;
        }
        else
        {
            $this->name = $this->config_data->website_title;
        }
        if(strlen($this->toEmail) == 0)
        {
            $this->toEmail = $this->config_data->admin_email;
        }
    }
    
    function setBody()
    {
        $this->subject = $this->config_data->website_title." | ".$this->subject;
    }
            
    function sendmail($file,$data)
    {
        $this->setHeader();
        $this->setBody();
       if($this->print == false)
       {
            \Mail::send($file, $data, function ($message) {
                $message->from($this->fromEmail, $this->name);
                $message->to($this->toEmail);
                $message->subject($this->subject);
                //if(!empty($this->attached_file))
                //$message->attach($this->attached_file, array $options = []);
                //$message->replyTo($this->toEmail);
                //$message->cc($this->toEmail);

            });
       }
       else
       {
           return view($file, $data);
       }
    }

    function api_sendmail($file,$data)
    {
        $this->setHeader();
        $this->setBody();
       
        $is_sent = \Mail::send($file, $data, function ($message) {
            $message->from($this->fromEmail, $this->name);
            $message->to($this->toEmail);
            $message->subject($this->subject);
            //if(!empty($this->attached_file))
            //$message->attach($this->attached_file, array $options = []);
            //$message->replyTo($this->toEmail);
            //$message->cc($this->toEmail);

        });

        return $is_sent;
        
    }
}