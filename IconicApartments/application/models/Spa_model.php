<?php
    class Spa_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function get_masseurs(){
            $query = $this->db->get('masseur');
            //print_r($query->result_array());
            return $query->result_array();
        }

        public function get_masseur($mid){
            $this->db->where('masseur.masseur_id', $mid);
            $this->db->select('masseur_name');
            $query = $this->db->get('masseur');
            //print_r($query->result_array());
            return $query->row_array();
        }

        public function get_resident($uid){
            $this->db->where('resident.user_id', $uid);
            $this->db->select('resident_name');
            $query = $this->db->get('resident');
            //print_r($query->result_array());
            return $query->row_array();
        }

        public function book_masseur($data){
            $this->db->insert('masseur_booking',$data);
        }

        public function mark_attendance($data){
            $this->db->insert('spa_attendance',$data);
        }

        public function get_bookings($uid){
            $this->db->select('*');
            $this->db->from('masseur_booking');
            $this->db->join('masseur','masseur_booking.masseur_id=masseur.masseur_id');
            $this->db->where('masseur_booking.user_id',$uid);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_masseurid($uid){ //spa model or user model ??? is there a better way???
            $this->db->where('masseur.user_id', $uid);
            $this->db->select('masseur.masseur_id');
            $query = $this->db->get('masseur');

            return $query->row_array();
        }

        public function get_bookings_masseur($mid, $status){
            $this->db->select('*');
            $this->db->from('masseur_booking');
            $this->db->join('resident','masseur_booking.user_id=resident.user_id');
            $this->db->where('masseur_booking.masseur_id', $mid);
            $this->db->where('masseur_booking.booking_status', $status);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function accept_booking($bid){
            $update = array('booking_status'=> 'accepted');
            $this->db->where('masseur_booking.booking_id', $bid);
            $this->db->update('masseur_booking', $update);
        }

        public function delete_booking($bid){
            $this->db->where('masseur_booking.booking_id', $bid);
            $this->db->delete('masseur_booking');
        }
    }
?>