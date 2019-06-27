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

        public function available_masseurs($data){
            $date = $data['date'];
            $timefrom = $data['time_from'];
            $timeto = $data['time_to'];

            $where =  "masseur_id NOT IN (SELECT masseur_booking.masseur_id FROM masseur_booking WHERE masseur_booking.booking_status <> 'rejected' AND masseur_booking.date = '$date' AND (masseur_booking.time_from >= '$timefrom' AND masseur_booking.time_to <= '$timeto'));";
            $this->db->select('masseur.masseur_id, masseur.masseur_name, masseur.last_name, masseur.user_id');
            $this->db->from('masseur');
            $this->db->where($where);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_residents(){
            $query = $this->db->get('resident');
            //print_r($query->result_array());
            return $query->result_array();
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

        // public function mark_attendance($data){
        //     $this->db->insert('spa_attendance',$data);
        // }

        public function book_spaRoom($data){
            $this->db->insert('spa_room_booking',$data);
        }


        public function get_bookings($uid){
            $this->db->select('*');
            $this->db->from('masseur_booking');
            $this->db->join('masseur','masseur_booking.masseur_id=masseur.masseur_id');
            $this->db->where('masseur_booking.user_id',$uid);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_roombookings($uid){
            $this->db->select('*');
            $this->db->from('spa_room_booking');
            $this->db->join('user','spa_room_booking.user_id=user.user_id');
            $this->db->where('spa_room_booking.user_id',$uid);
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

        public function update_accept($bid){
            $update = array('booking_status'=> 'accepted');
            $this->db->where('masseur_booking.booking_id', $bid);
            $this->db->update('masseur_booking', $update);
        }

        public function update_reject($bid){
            $update = array('booking_status'=> 'rejected');
            $this->db->where('masseur_booking.booking_id', $bid);
            $this->db->update('masseur_booking', $update);
        }

        public function delete_booking($bid){
            $this->db->where('masseur_booking.booking_id', $bid);
            $this->db->delete('masseur_booking');
        }
    }
?>