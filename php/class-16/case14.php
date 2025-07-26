<?php
/*
Build a task management system. Each task has:
- taskName 
- assignee 
- deadline 
- priority 
- status 
- taskId 

Show complete task profile with all task information.
*/
//Project Management System
class Task{
    public $taskName;
    public $assignee;
    public $deadline;
    public $priority;
    public $status;
    public $taskId;

    public function showProfile(){
        echo "Task Name: $this->taskName\n Assignee: $this->assignee\n Deadline: $this->deadline\n Priority: $this->priority\n Status: $this->status\n Task ID: $this->taskId\n";
    }
}

$task1 = new Task();
$task1->taskName = "Database Design\n";
$task1->assignee = "John Doe\n";
$task1->deadline = "2024-02-01\n";
$task1->priority = "High\n";
$task1->status = "In Progress\n";
$task1->taskId = "PROJ001\n";

$task1->showProfile();