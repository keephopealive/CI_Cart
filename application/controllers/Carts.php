<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function add()
	{
		$cart = $this->session->userdata('cart');
		if($cart){
			for($i = 0; $i<count($cart); $i++){
				if($cart[$i]['product_id'] == $this->input->post('product_id')){
					$cart[$i]['qty'] += $this->input->post('qty');	
					break;
				}
				if($i == (count($cart)-1) ){
					$cart[] = $this->input->post();
					break;
				}
			}
		}
		else {
			$cart[] = $this->input->post();
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/checkout');
	}

	public function destroy($id){
		$cart = $this->session->userdata('cart');
		if($cart){
			for($i = 0; $i<count($cart); $i++){
				if($cart[$i]['product_id'] == $id){
					for($x = $i; $x < (count($cart)-1) ; $x++ ){
						$cart[$x] = $cart[$x+1];
					}
					array_pop($cart);
					break;
				}
			}
			$this->session->set_userdata('cart', $cart);
		}
		redirect('/checkout');
	}

	public function update($id){
		$cart = $this->session->userdata('cart');
		if($cart){
			for($i = 0; $i<count($cart); $i++){
				if($cart[$i]['product_id'] == $id){
					$cart[$i]['qty'] = $this->input->post('qty');
				}
			}
			$this->session->set_userdata('cart', $cart);
		}
		redirect('/checkout');
	}

	public function checkout(){
		$this->load->view('checkout', array(
			'cart' => $this->session->userdata('cart')
		));
	}
}
