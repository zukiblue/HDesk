<?php
require_once 'basedb.class.php';

class Tickets extends BaseDB{
        
    static function init() {
        return ( ($tickets=new Tickets())?$tickets:null );
    }
    
    function Tickets() {
        parent::BaseDB();
        $this->table = TBL_TICKETS;
        $this->tableAlias = 'tickets';
       /* $this->sortOptions=array(
            'name'=>'users.name',
            'username'=>'users.username',
            'status'=>'users.active',
            'created'=>'users.creationdate',
            'login'=>'users.lastlogin');*/
        $this->defaultColumnOrder = '';
        //override
        $this->primaryKeyField='ticket_id';
        
        $this->select ='SELECT '.$this->tableAlias.'.* ';
        $this->from   ='FROM '.$this->table.' '.$this->tableAlias.' ';
        
        return;
    }   

    function loadAll($sortCol, $sortOrd, $start=0, $limit=999999) {
        parent::loadAll($sortCol, $sortOrd, $start, $limit);

        $where='WHERE 1 ';
        $groupby = ''; //GROUP BY 

        $sql=$this->select.', lock_id, dept_name, priority_desc '
            .' ,count(attach.attach_id) as attachments '
            .' ,count(DISTINCT message.id) as messages '
            .' ,count(DISTINCT response.id) as responses '
            .' ,count(DISTINCT note.id) as notes '
            .$this->from               
            .' LEFT JOIN '.DEPT_TABLE.' dept ON (ticket.dept_id=dept.dept_id) '
            .' LEFT JOIN '.TICKET_PRIORITY_TABLE.' pri ON ('
                .'ticket.priority_id=pri.priority_id) '
            .' LEFT JOIN '.TICKET_LOCK_TABLE.' tlock ON ('
                .'ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()) '
            .' LEFT JOIN '.TICKET_ATTACHMENT_TABLE.' attach ON ('
                .'ticket.ticket_id=attach.ticket_id) '
            .' LEFT JOIN '.TICKET_THREAD_TABLE.' message ON ('
                ."ticket.ticket_id=message.ticket_id AND message.thread_type = 'M') "
            .' LEFT JOIN '.TICKET_THREAD_TABLE.' response ON ('
                ."ticket.ticket_id=response.ticket_id AND response.thread_type = 'R') "
            .' LEFT JOIN '.TICKET_THREAD_TABLE.' note ON ( '
                ."ticket.ticket_id=note.ticket_id AND note.thread_type = 'N') "
          //  .' WHERE ticket.ticket_id='.db_input($id)
            .' GROUP BY ticket.ticket_id';

        //$sql="$this->select $this->from $where $groupby $this->orderby";

        //echo $sql;
        $this->records = parent::queryData($sql);
       
        return ($this->records);
    }
/*
    function loadRecord($id) {
        $where='WHERE '.$this->tableAlias.'.'.$this->primaryKeyField.'='.db_input($id);
        $groupby = ''; //GROUP BY 

        $sql=$this->select.', lock_id, dept_name, priority_desc '
            .' ,count(attach.attach_id) as attachments '
            .' ,count(DISTINCT message.id) as messages '
            .' ,count(DISTINCT response.id) as responses '
            .' ,count(DISTINCT note.id) as notes '
            .$this->from               
            .' LEFT JOIN '.DEPT_TABLE.' dept ON (ticket.dept_id=dept.dept_id) '
            .' LEFT JOIN '.TICKET_PRIORITY_TABLE.' pri ON (ticket.priority_id=pri.priority_id) '
            .' LEFT JOIN '.TICKET_LOCK_TABLE.' tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()) '
            .' LEFT JOIN '.TICKET_ATTACHMENT_TABLE.' attach ON (ticket.ticket_id=attach.ticket_id) '
            .' LEFT JOIN '.TICKET_THREAD_TABLE." message ON (ticket.ticket_id=message.ticket_id AND message.thread_type = 'M') " 
            .' LEFT JOIN '.TICKET_THREAD_TABLE." response ON (ticket.ticket_id=response.ticket_id AND response.thread_type = 'R') "
            .' LEFT JOIN '.TICKET_THREAD_TABLE." note ON ( ticket.ticket_id=note.ticket_id AND note.thread_type = 'N') "
            .$where
            .$groupby;

        //echo $sql;
        $this->record = parent::queryData($sql);
        
        return ($this->record);
    }

 */
}
?>
