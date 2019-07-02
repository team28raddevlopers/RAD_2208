<?php
    class Bookings_model extends CI_Model{
        public function __construct()
        {
            parent::__construct();
        }

        public function spa_get_bookings($status){
            $this->db->select('*');
            $this->db->from('spa_room_booking');
            $this->db->join('resident','spa_room_booking.user_id=resident.user_id');
            $this->db->where('spa_room_booking.booking_status', $status);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function tennis_get_bookings($status){
            $this->db->select('*');
            $this->db->from('tennis_court_booking');
            $this->db->join('resident','tennis_court_booking.user_id=resident.user_id');
            $this->db->where('tennis_court_booking.booking_status', $status);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function spa_update_accept($bid){
            $update = array('booking_status'=> 'accepted');
            $this->db->where('spa_room_booking.booking_id', $bid);
            $this->db->update('spa_room_booking', $update);
        }

        public function spa_update_reject($bid){
            $update = array('booking_status'=> 'rejected');
            $this->db->where('spa_room_booking.booking_id', $bid);
            $this->db->update('spa_room_booking', $update);
        }

        public function tennis_update_accept($bid){
            $update = array('booking_status'=> 'accepted');
            $this->db->where('tennis_court_booking.booking_id', $bid);
            $this->db->update('tennis_court_booking', $update);
        }

        public function tennis_update_reject($bid){
            $update = array('booking_status'=> 'rejected');
            $this->db->where('tennis_court_booking.booking_id', $bid);
            $this->db->update('tennis_court_booking', $update);
        }

        public function spa_delete_booking($bid){
            $this->db->where('spa_room_booking.booking_id', $bid);
            $this->db->delete('spa_room_booking');
        }

        public function tennis_delete_booking($bid){
            $this->db->where('tennis_court_booking.booking_id', $bid);
            $this->db->delete('tennis_court_booking');
        }
    }
?>