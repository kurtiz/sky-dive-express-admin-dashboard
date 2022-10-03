<?php

namespace App\Libraries;

class EmailLibrary {
    private $to = "";
    private $name = "";
    private $from = "";
    private $cc = [];
    private $bcc = [];
    private $CRLF = "\r\n";
    private $newline = "\r\n";
    private $wordWrap = [
        "state" => true,
        "length" => 70
    ];
    private $replyTo = "";
    private $headers = [];
    private $header = "";
    private $message = "";
    private $subject = "";
    private $debugMessage = [];

    /**
     * sends the email
     * @param bool $debugMode true to enable debug mode and false to disable debug mode.
     *  By default, it's set to false
     * @return array|bool|void returns an array which is the debug message or returns a
     * boolean value depending on the outcome of the event
     */
    public function send(bool $debugMode = false){
        if(!empty($this->from)){
            if(!empty($this->subject)){
                if(!empty($this->message)){
                    if(!empty($this->header)){
                        $sent = mail($this->to, $this->subject, $this->message, $this->header);
                        if($sent){
                            return true;
                        } else {
                            if($debugMode){
                                return $this->printDebugger();
                            } else {
                                return false;
                            }
                        }
                    } else {
                        $this->debugMessage["error"] = "'Header' not set!";
                    }
                } else {
                    $this->debugMessage["error"] = "'Message' not set!";
                }
            } else {
                $this->debugMessage["error"] = "'Subject' not set!";
            }
        } else {
            $this->debugMessage["error"] = "'From' not set!";
        }

    }

    /**
     * set recipient address
     * @param array $sendTo email addresses to send to
     * @return void
     */
    public function setTo(array $sendTo):void {
        $this->to = implode(', ', $sendTo);
    }

    /**
     * set name of sender
     * @param string $sendName name of sender
     * @return void
     */
    public function setName(string $sendName):void {
        $this->name = trim($sendName);
    }

    /**
     * set sender address
     * @param string $sendFrom email address to send from
     * @return void
     */
    public function setFrom(string $sendFrom):void {
        $this->from = trim($sendFrom);
    }

    /**
     * set carbon copy
     * @param string | array $sendCC list of email addresses to receive a carbon copy of the email
     * @return void
     */
    public function setCC($sendCC):void {
        $this->cc = $sendCC;
    }

    /**
     * set blind carbon copy
     * @param string | array $sendBCC list of emails addresses to receive a blind copy of the email
     * @return void
     */
    public function setBCC($sendBCC):void {
        $this->bcc = $sendBCC;
    }

    /**
     * prepares the headers for the email
     * @return void
     */
    public function prepareHeaders():void {

        $this->headers = [];

        if(empty($this->name)) {
            $this->headers[] = "From: $this->from";
        } else {
            $this->headers[] = "From: $this->name <$this->from>";
        }

        if(!empty($this->cc)){
            $this->headers[] = "Cc: ".implode(", ", $this->cc);
        }

        if(!empty($this->bcc)){
            $this->headers[] = "Bcc: ".implode(", ", $this->bcc);
        }

        $this->headers[] = "MIME-Version: 1.0";
        $this->headers[] = "Content-type: text/html";
        $this->headers[] = "X-Mailer: PHP/" . phpversion();

        $this->setHeader();
    }

    /**
     * set header for email
     * @return void
     */
    private function setHeader():void {
        $this->header = implode($this->CRLF, $this->headers);
    }

    /**
     * enable or disable word wrap for the content and sets the length of the
     * content. By default, it's set to true and the length
     * is set to 70 characters
     * @param bool $state state of word wrap
     * @param int $length length of word wrap
     * @return void
     */
    public function setWordWrap(bool $state, int $length):void {
        $this->wordWrap["state"] = $state;
        $this->wordWrap["length"] = $length;
    }

    /**
     * sets the message to be sent
     * @param string $message message to be sent
     * @return void
     */
    public function setMessage(string $message):void {
        if($this->wordWrap["state"]){
            $this->message = wordwrap(
                $message,
                $this->wordWrap["length"],
                $this->newline
            );
        }
    }

    /**
     * returns the debug messages
     * @return array
     */
    public function printDebugger(): array {
        return $this->debugMessage;
    }

    /**
     * set the subject of the email
     * @param string $subject subject of the email
     * @return void
     */
    public function setSubject(string $subject):void {
        $this->subject = trim($subject);
    }

    /**
     * set email address to reply to. It is usually the sender email
     * @param string $replyToAddress email address of the reply
     * @return void
     */
    public function setReplyTo(string $replyToAddress):void {
        $this->replyTo = trim($replyToAddress);
    }

    public function reset() {
        $this->to = "";
        $this->name = "";
        $this->from = "";
        $this->cc = [];
        $this->bcc = [];
        $this->wordWrap = [
            "state" => true,
            "length" => 70
        ];
        $this->replyTo = "";
        $this->headers = [];
        $this->header = "";
        $this->message = "";
        $this->subject = "";
        $this->debugMessage = [];
    }
    
}