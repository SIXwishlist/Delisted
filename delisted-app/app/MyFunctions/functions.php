<?php

namespace App\MyFunctions;

class lookuper
{
    public function __construct($blacklist, $ip)
    {
        $this->blacklist = $blacklist;
        $this->ip = $ip;
  
    }
    public function lookup()
    {
      $reverse_ip = implode(".", array_reverse(explode(".", $this->$ip)));
      $query = $reverse_ip . ".zen.spamhaus.org";
      $result = dns_get_record($query, DNS_A);
      return $result;
    }

}

