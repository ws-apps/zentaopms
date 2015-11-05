<?php
/**
 * The project module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* Fields. */
$lang->project->common        = $lang->projectCommon;
$lang->project->id            = 'ID';
$lang->project->company       = 'Company';
$lang->project->fromproject   = 'From' . $lang->projectCommon;
$lang->project->iscat         = 'Is category';
$lang->project->type          = 'Type';
$lang->project->parent        = 'Parent';
$lang->project->name          = 'Name';
$lang->project->code          = 'Code';
$lang->project->begin         = 'Begin';
$lang->project->end           = 'End';
$lang->project->dateRange     = 'Range';
$lang->project->to            = 'To';
$lang->project->days          = 'Workdays';
$lang->project->day           = 'day';
$lang->project->status        = 'Status';
$lang->project->statge        = 'Stage';
$lang->project->pri           = 'Priority';
$lang->project->desc          = 'Desc';
$lang->project->openedBy      = 'Opened by';
$lang->project->openedDate    = 'Opened date';
$lang->project->closedBy      = 'Closed by';
$lang->project->closedDate    = 'Closed date';
$lang->project->canceledBy    = 'Canceled by';
$lang->project->canceledDate  = 'Canceled date';
$lang->project->owner         = 'Owner';
$lang->project->PO            = $lang->productCommon . ' owner';
$lang->project->PM            = $lang->projectCommon . ' manager';
$lang->project->QD            = 'Quality director';
$lang->project->RD            = 'Release director';
$lang->project->acl           = 'Access limitation';
$lang->project->teamname      = 'Team name';
$lang->project->order         = "{$lang->projectCommon} order";
$lang->project->products      = "{$lang->productCommon}s";
$lang->project->childProjects = "Child {$lang->projectCommon}s";
$lang->project->whitelist     = 'Whitelist';
$lang->project->totalEstimate = 'Est';
$lang->project->totalConsumed = 'Done';
$lang->project->totalLeft     = 'Left';
$lang->project->Left          = 'Left';
$lang->project->progess       = 'Progess';
$lang->project->viewBug       = 'View bug';
$lang->project->noProduct     = "No {$lang->productCommon}";
$lang->project->select        = "Select {$lang->projectCommon}";
$lang->project->createStory   = "Create story";
$lang->project->all           = 'All';
$lang->project->undone        = 'Undone';
$lang->project->unclosed      = 'Unclosed';
$lang->project->typeDesc      = 'No burndown and story in OPS';
$lang->project->mine          = 'I charge : ';
$lang->project->other         = 'Other : ';
$lang->project->deleted       = 'Deleted';

$lang->project->start    = 'Start';
$lang->project->activate = 'Activate';
$lang->project->putoff   = 'Putoff';
$lang->project->suspend  = 'Suspend';
$lang->project->close    = 'Close';

$lang->project->typeList['sprint']    = 'Sprint';
$lang->project->typeList['waterfall'] = 'Waterfall';
$lang->project->typeList['ops']       = 'OPS';

$lang->project->endList[7]   = 'One Weeks';
$lang->project->endList[14]  = 'Two Weeks';
$lang->project->endList[31]  = 'One Month';
$lang->project->endList[62]  = 'Two Months';
$lang->project->endList[93]  = 'Three Months';
$lang->project->endList[186] = 'Half Of Year';
$lang->project->endList[365] = 'One Year';

$lang->team = new stdclass();
$lang->team->account    = 'Account';
$lang->team->role       = 'Role';
$lang->team->join       = 'Join date';
$lang->team->hours      = 'Hour/Day';
$lang->team->days       = 'Workdays';
$lang->team->totalHours = 'Total';

$lang->project->basicInfo = 'Basic info';
$lang->project->otherInfo = 'Other info';

/* Lists. */
$lang->project->statusList['wait']      = 'Pending';
$lang->project->statusList['doing']     = 'Progressing';
$lang->project->statusList['suspended'] = 'Suspended';
$lang->project->statusList['done']      = 'Done';

$lang->project->aclList['open']    = "Default(Having the priviledge of {$lang->projectCommon} module can visit this {$lang->projectCommon})";
$lang->project->aclList['private'] = 'Private(Only team members can visit)';
$lang->project->aclList['custom']  = 'Whitelist(Team members and who belongs to the whitelist grups can visit)';

/* Methods.*/
$lang->project->index            = "Index";
$lang->project->task             = 'Task';
$lang->project->groupTask        = 'View task by group';
$lang->project->story            = 'Story';
$lang->project->bug              = 'Bug';
$lang->project->dynamic          = 'Dynamic';
$lang->project->build            = 'Build';
$lang->project->testtask         = 'Testtask';
$lang->project->burn             = 'Burndown';
$lang->project->baseline         = 'Base Line';
$lang->project->computeBurn      = 'Update';
$lang->project->burnData         = 'Burndown data';
$lang->project->fixFirst         = 'Fix first data';
$lang->project->team             = 'Team';
$lang->project->doc              = 'Doc';
$lang->project->manageProducts   = 'Link ' . $lang->productCommon;
$lang->project->linkStory        = 'Link story';
$lang->project->view             = "Info";
$lang->project->create           = "Add";
$lang->project->copy             = "Copy a {$lang->projectCommon}";
$lang->project->delete           = "Delete";
$lang->project->browse           = "Browse";
$lang->project->edit             = "Edit";
$lang->project->batchEdit        = "Batch Edit";
$lang->project->manageMembers    = 'Manage team members';
$lang->project->unlinkMember     = 'Remove member';
$lang->project->unlinkStory      = 'Remove story';
$lang->project->batchUnlinkStory = 'Batch remove story';
$lang->project->importTask       = 'Transfer task';
$lang->project->importBug        = 'Import bug';
$lang->project->ajaxGetProducts  = "API: get {$lang->projectCommon}'s {$lang->productCommon}s";
$lang->project->updateOrder      = 'Order';

/* Browse. */
$lang->project->allTasks             = 'All';
$lang->project->assignedToMe         = 'To me';

$lang->project->statusSelects['']             = 'More';
$lang->project->statusSelects['finishedbyme'] = 'Finished by me'; 
$lang->project->statusSelects['wait']         = 'Wait';
$lang->project->statusSelects['doing']        = 'Doing';
$lang->project->statusSelects['undone']       = 'Undone';
$lang->project->statusSelects['done']         = 'Done'; 
$lang->project->statusSelects['closed']       = 'Closed';
$lang->project->statusSelects['delayed']      = 'Delayed';
$lang->project->statusSelects['needconfirm']  = 'Story changed';
$lang->project->statusSelects['cancel']       = 'Canceled';
$lang->project->groups['']           = 'Group View';
$lang->project->groups['story']      = 'Group by story';
$lang->project->groups['status']     = 'Group by status';
$lang->project->groups['pri']        = 'Group by priority';
$lang->project->groups['openedby']   = 'Group by openedBy';
$lang->project->groups['assignedTo'] = 'Group by assignedTo';
$lang->project->groups['finishedby'] = 'Group by finishedBy';
$lang->project->groups['closedby']   = 'Group by closedBy';
$lang->project->groups['estimate']   = 'Group by estimate';
$lang->project->groups['consumed']   = 'Group by consumed';
$lang->project->groups['left']       = 'Group by left';
$lang->project->groups['type']       = 'Group by type';
$lang->project->groups['deadline']   = 'Group by deadline';

$lang->project->moduleTask           = 'Module';
$lang->project->byQuery              = 'Search';

/* Browse tabs. */
$lang->project->allProject      = "All {$lang->projectCommon}s";
$lang->project->aboveAllProduct = "Above all {$lang->productCommon}s";
$lang->project->aboveAllProject = "Above all {$lang->projectCommon}s";

/* Notcie. */
$lang->project->selectProject   = "Select {$lang->projectCommon}";
$lang->project->beginAndEnd     = 'Begin and end';
$lang->project->lblStats        = 'Stats';
$lang->project->stats           = 'Total work hours is 『%s』hours, <br />Total estimate is『%s』hours,<br />Total confused is『%s』hours<br />Total left is『%s』hours';
$lang->project->oneLineStats    = "{$lang->projectCommon}『%s』, code is『%s』, {$lang->productCommon}s is『%s』,begin from『%s』to 『%s』,total estimate『%s』hours,consumed『%s』hours,left『%s』hours.";
$lang->project->taskSummary     = "<strong>%s</strong> tasks in this page. Pending: <strong>%s</strong>. doing: <strong>%s</strong>. Est: <strong>%s</strong> h. Consumed: <strong>%s</strong> h. Left: <strong>%s</strong>.";
$lang->project->memberHours     = "%s has <strong>%s</strong> workhours, ";
$lang->project->groupSummary    = "<strong>%s</strong> tasks in this group, wait:<strong>%s</strong>, doing:<strong>%s</strong>, estimate <strong>%s</strong>, consumed <strong>%s</strong>, left <strong>%s</strong> hours.";
$lang->project->wbs             = "WBS";
$lang->project->batchWBS        = "Batch WBS";
$lang->project->largeBurnChart  = 'View large';
$lang->project->howToUpdateBurn = "<a href='http://api.zentao.net/goto.php?item=burndown&lang=zh-cn' title='How to update burndown?' target='_blank' class='btn btn-sm'>Help</a>";
$lang->project->whyNoStories    = "There no active stories to added to this {$lang->projectCommon}. Please check the linked {$lang->productCommon}.";
$lang->project->doneProjects    = 'Done';
$lang->project->unDoneProjects  = 'Undone';
$lang->project->copyTeam        = 'Copy a team';
$lang->project->copyFromTeam    = 'Copy form team: <strong>%s</strong>';
$lang->project->noMatched       = "No matched {$lang->projectCommon} including '%s'";
$lang->project->copyTitle       = "Choose A {$lang->projectCommon} To Copy";
$lang->project->copyTeamTitle   = 'Choose A Team To Copy';
$lang->project->copyNoProject   = "No {$lang->projectCommon} To Copy";
$lang->project->copyFromProject = 'Copy from: <strong>%s</strong>';
$lang->project->reCopy          = 'recopy';
$lang->project->cancelCopy      = 'cancel copy';
$lang->project->byPeriod        = 'By period';
$lang->project->byUser          = 'By user';

/* Confirm. */
$lang->project->confirmDelete         = "Are you sure to delete {$lang->projectCommon} [%s]?";
$lang->project->confirmUnlinkMember   = "Are you sure to remove this user from this {$lang->projectCommon}?";
$lang->project->confirmUnlinkStory    = "Are you sure to remove the story from this {$lang->projectCommon}?";
$lang->project->errorNoLinkedProducts = "There is no linked {$lang->productCommon}s, go to the link page.";
$lang->project->accessDenied          = "Access to this {$lang->projectCommon} denied.";
$lang->project->tips                  = 'Tips';
$lang->project->afterInfo             = 'Successful and you can do:';
$lang->project->setTeam               = 'Set team';
$lang->project->linkStory             = 'Link story';
$lang->project->createTask            = 'Create task';
$lang->project->goback                = 'Go back';
$lang->project->linkProduct           = "Select {$lang->productCommon} to link...";
$lang->project->noweekend             = 'No weekend';
$lang->project->withweekend           = 'With weekend';
$lang->project->interval              = 'Interval';

/* Report. */
$lang->project->charts = new stdclass();
$lang->project->charts->burn = new stdclass();
$lang->project->charts->burn->graph = new stdclass();
$lang->project->charts->burn->graph->caption      = "Burndown chart";
$lang->project->charts->burn->graph->xAxisName    = "Date";
$lang->project->charts->burn->graph->yAxisName    = "HOUR";
$lang->project->charts->burn->graph->baseFontSize = 12;
$lang->project->charts->burn->graph->formatNumber = 0;
$lang->project->charts->burn->graph->animation    = 0;
$lang->project->charts->burn->graph->rotateNames  = 1;
$lang->project->charts->burn->graph->showValues   = 0;

$lang->project->placeholder = new stdclass();
$lang->project->placeholder->code      = "{$lang->projectCommon} code";
$lang->project->placeholder->totalLeft = 'Total left when start project';

$lang->project->selectGroup = new stdclass();
$lang->project->selectGroup->doing     = '(doing)';
$lang->project->selectGroup->suspended = '(suspended)';
$lang->project->selectGroup->done      = '(done)';

$lang->project->projectTasks = "{$lang->projectCommon}s";
