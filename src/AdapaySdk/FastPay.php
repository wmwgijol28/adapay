<?phpnamespace Wmwgijol28\Adapay\AdaPaySdk;use Wmwgijol28\Adapay\AdapayCore\AdaPay;class FastPay extends AdaPay{    public $endpoint = "/v1/fast_pay";    public function __construct()    {//        self::$gateWayType = "page";        parent::__construct();    }    public function payConfirm($params=array()){        $request_params = $params;        $request_params = $this->do_empty_data($request_params);        $req_url =  self::$gateWayUrl .$this->endpoint. "/confirm";        $header =  $this->get_request_header($req_url, $request_params, self::$header);        $this->result = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json=true);    }    public function paySmsCode($params=array()){        $request_params = $params;        $request_params = $this->do_empty_data($request_params);        $req_url =  self::$gateWayUrl .$this->endpoint. "/sms_code";        $header =  $this->get_request_header($req_url, $request_params, self::$header);        $this->result = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json=true);    }}