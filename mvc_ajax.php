  //ini controller 
	function nama_function_controller(){

        $res_data_acct  = $this->file_model->nama_function_model();
       
        $html;
        $nos = 0+1;
        foreach ($res_data_acct as $v) {

            $html .='ini html untuk list';

        }
        echo $html;

    }
	
	
	//ini model 
	function nama_function_model(){
        
            $sql = "SELECT NAMA QUERY";
            return $this->db->query($sql);
        
    }
	
	
	//ini view
		$("#btn_tampilkan").click(function(){
			$.ajax({ 
                url: base_url + 'nama_file_controller/nama_function_controller',
                type: "post",
                data:{post_1 : $("#post_1").val()},
                dataType: "html",
                async : 'false',
                success: function(result)
                {
					$("#list_view").append(result);
                },
                beforeSend: function () {
                    //tampilloading_show
                },
                complete: function () {
                    //tampilloading_hide

                }
            });
		});
		
		
		<div id="list_view"></div>
