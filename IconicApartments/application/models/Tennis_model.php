<?php
    class Tennis_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function get_coaches(){
            $query = $this->db->get('coach');
            //print_r($query->result_array());
            return $query->result_array();
        }

        public function get_coach($cid){
            $this->db->where('coach.coach_id', $cid);
            $this->db->select('coach_name');
            $query = $this->db->get('coach');
            //print_r($query->result_array());
            return $query->row_array();
        }

        public function available_coaches($data){
            $date = $data['date'];
            $timefrom = $data['time_from'];
            $timeto = $data['time_to'];

            $where =  "coach_id NOT IN (SELECT coach_booking.coach_id FROM coach_booking WHERE coach_booking.booking_status <> 'rejected' AND coach_booking.date = '$date' AND (coach_booking.time_from >= '$timefrom' AND coach_booking.time_to <= '$timeto'));";
            $this->db->select('coach.coach_id, coach.coach_name, coach.last_name, coach.user_id');
            $this->db->from('coach');
            $this->db->join('user', 'user.user_id = coach.user_id');
            $this->db->where('user.register', 1);
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

        public function book_coach($data){
            $this->db->insert('coach_booking',$data);
        }

        public function book_tennisCourt($data){
          echo $data;
            $this->db->insert('tennis_court_booking',$data);
        }


        public function get_bookings($uid){
            $this->db->select('*');
            $this->db->from('coach_booking');
            $this->db->join('coach','coach_booking.coach_id=coach.coach_id');
            $this->db->where('coach_booking.user_id',$uid);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_courtbookings($uid){
            $this->db->select('*');
            $this->db->from('tennis_court_booking');
            $this->db->join('user','tennis_court_booking.user_id=user.user_id');
            $this->db->where('tennis_court_booking.user_id',$uid);
            $query = $this->db->get();

            return $query->result_array();
        }


        public function get_coachid($uid){ //spa model or user model ??? is there a better way???
            $this->db->where('coach.user_id', $uid);
            $this->db->select('coach.coach_id');
            $query = $this->db->get('coach');

            return $query->row_array();
        }

        public function get_bookings_coach($cid, $status){
            $this->db->select('*');
            $this->db->from('coach_booking');
            $this->db->join('resident','coach_booking.user_id=resident.user_id');
            $this->db->where('coach_booking.coach_id', $cid);
            $this->db->where('coach_booking.booking_status', $status);
            $query = $this->db->get();

            return $query->result_array();
        }
       public function update_accept($bid){
            $update = array('booking_status'=> 'accepted');
            $this->db->where('coach_booking.booking_id', $bid);
            $this->db->update('coach_booking', $update);
        }

        public function update_reject($bid){
            $update = array('booking_status'=> 'rejected');
            $this->db->where('coach_booking.booking_id', $bid);
            $this->db->update('coach_booking', $update);
        }
        public function delete_courtbooking($bid){
            $this->db->where('tennis_court_booking.booking_id', $bid);
            $this->db->delete('tennis_court_booking');
        }
        public function delete_coachbooking($bid){
            $this->db->where('coach_booking.booking_id', $bid);
            $this->db->delete('coach_booking');
        }
    }
?>
