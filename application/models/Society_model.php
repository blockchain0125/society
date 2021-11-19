<?php

/**
 * Class Society_model
 * @property CI_DB_driver|CI_DB_sqlite3_driver $db The DB driver
 */
class Society_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function marcoFineArts()
    {
        $query = $this->db->query("SELECT order_.*, order_line_items.quantity FROM order_line_items LEFT JOIN (SELECT orders.id, orders.user_id, orders.first_name, orders.last_name, orders.address_1, orders.address_2, orders.city, orders.state, orders.postal_code, orders.country, creatives.image_url FROM orders LEFT JOIN creatives ON orders.user_id = creatives.user_id) AS order_ ON order_.id = order_line_items.order_id WHERE order_line_items.vendor_id = 1 ");
        return $query->result_array();
    }

    public function dreamJunction()
    {
        $query = $this->db->query("SELECT order_.*, order_line_items.quantity FROM order_line_items LEFT JOIN (SELECT orders.id, orders.user_id, orders.first_name, orders.last_name, orders.address_1, orders.address_2, orders.city, orders.state, orders.postal_code, orders.country, creatives.image_url FROM orders LEFT JOIN creatives ON orders.user_id = creatives.user_id) AS order_ ON order_.id = order_line_items.order_id WHERE order_line_items.vendor_id = 2 ");
        return $query->result_array();
    }

}
