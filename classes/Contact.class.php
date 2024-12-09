<?php
    class Contact extends  Entity{
        public static $tableName = 'contact';
        public static $keyColumn = 'contact_id';
        // Remove Warning Deprecated
        public $contact_id;
        public $website_link;
        public $website;
        public $vlasnik;
        public $tel_call;
        public $tel;
        public $adresa;
        public $price;
        public $question;
        
        public function render(){
            $render = "
                <table id='contact'>
                    <thead>
                        <tr>
                            <th colspan='2'><span id='h3'>KONTAKT</span><span id='website'>
                                <a href=\"$this->website_link\" target='_blank'>$this->website</a>
                              </span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class='table_information'>Vlasnik</td>
                            <td class='table_answer'>$this->vlasnik</td>
                        </tr>
                        <tr>
                            <td class='table_information'>Telefon:</td>
                            <td><a href=\"tel:$this->tel_call\">$this->tel</a></td>
                        </tr>
                        <tr>
                            <td class='table_information'>Adresa:</td>
                            <td>$this->adresa</td>
                        </tr>
                    </tbody>
                        
                    <tfoot>
                        <tr>
                            <td colspan='2'><p id='price'>$this->price</p>
                                <a id='question' href='#contact_owner' class='request  modal-btn' rel=\"modal:open\">$this->question</a>
                            </td>
                            </tr>
                    </tfoot>
                </table>";

            return $render;
        }
    }