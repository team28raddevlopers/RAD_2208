<?php
    class Gym_model extends CI_Model {
 
        public function __construct()
        {
            parent::__construct();
        }

        public function get_instructors(){
            $query = $this->db->get('instructor');
            //print_r($query->result_array());
            return $query->result_array();
        }

        public function get_instructor($iid){
            $this->db->where('instructor.instructor_id', $iid);
            $this->db->select('instructor_name');
            $query = $this->db->get('instructor');
            //print_r($query->result_array());
            return $query->row_array();
        }

        public function available_instructors($data){
            $date = $data['date'];
            $timefrom = $data['time_from'];
            $timeto = $data['time_to'];
           // $where =  "instructor_booking.date IS NULL OR instructor_booking.date <> '$date' OR (instructor_booking.date = '$date' AND (instructor_booking.time_from >= '$timeto' OR instructor_booking.time_to <= '$timefrom'));";

            $where =  "instructor_id NOT IN (SELECT instructor_booking.instructor_id FROM instructor_booking WHERE instructor_booking.booking_status <> 'rejected' AND instructor_booking.date = '$date' AND (instructor_booking.time_from >= '$timefrom' AND instructor_booking.time_to <= '$timeto'));";
            $this->db->select('instructor.instructor_id, instructor.instructor_name, instructor.last_name, instructor.user_id');
            $this->db->from('instructor');
            $this->db->join('user', 'user.user_id = instructor.user_id');
            $this->db->where('user.register', 1);
            $this->db->where($where);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_resident($uid){
            $this->db->where('resident.user_id', $uid);
            $this->db->select('resident_name');
            $query = $this->db->get('resident');
            //print_r($query->result_array());
            return $query->row_array();
        }

        public function book_instructor($data){
            $this->db->insert('instructor_booking',$data);
        }

        public function mark_attendance($data){
            $this->db->insert('gym_attendance',$data);
        }

        public function get_attendence($uid){
            $this->db->where('gym_attendance.user_id', $uid);
            $this->db->order_by('gym_attendance.date, gym_attendance.time_from');
            $query = $this->db->get('gym_attendance');

            return $query->result_array();
        }

        public function get_bookings($uid){
            $this->db->select('*');
            $this->db->from('instructor_booking');
            $this->db->join('instructor','instructor_booking.instructor_id=instructor.instructor_id');
            $this->db->where('instructor_booking.user_id',$uid);
            $this->db->order_by('instructor_booking.date, instructor_booking.time_from');
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_instructorid($uid){ //gym model or user model ??? is there a better way???
            $this->db->where('instructor.user_id', $uid);
            $this->db->select('instructor.instructor_id');
            $query = $this->db->get('instructor');

            return $query->row_array();
        }

        public function get_bookings_instructor($iid, $status){
            $this->db->select('*');
            $this->db->from('instructor_booking');
            $this->db->join('resident','instructor_booking.user_id=resident.user_id');
            $this->db->where('instructor_booking.instructor_id', $iid);
            $this->db->where('instructor_booking.booking_status', $status);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function update_accept($bid){
            $update = array('booking_status'=> 'accepted');
            $this->db->where('instructor_booking.booking_id', $bid);
            $this->db->update('instructor_booking', $update);
        }

        public function update_reject($bid){
            $update = array('booking_status'=> 'rejected');
            $this->db->where('instructor_booking.booking_id', $bid);
            $this->db->update('instructor_booking', $update);
        }

        public function delete_booking($bid){
            $this->db->where('instructor_booking.booking_id', $bid);
            $this->db->delete('instructor_booking');
        }
    }
?>