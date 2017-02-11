<li class="{{ Request::is('banlists*') ? 'active' : '' }}">
    <a href="{!! route('email.banlists.index') !!}"><i class="fa fa-edit"></i><span>Banlists</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{!! route('core.companies.index') !!}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('banlists*') ? 'active' : '' }}">
    <a href="{!! route('email.banlists.index') !!}"><i class="fa fa-edit"></i><span>Banlists</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{!! route('core.companies.index') !!}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('departmentAssignStaffs*') ? 'active' : '' }}">
    <a href="{!! route('core.departmentAssignStaffs.index') !!}"><i class="fa fa-edit"></i><span>Department_assign_staffs</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{!! route('core.departments.index') !!}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('expenseCategories*') ? 'active' : '' }}">
    <a href="{!! route('balancesheet.expenseCategories.index') !!}"><i class="fa fa-edit"></i><span>ExpenseCategories</span></a>
</li>

<li class="{{ Request::is('expenses*') ? 'active' : '' }}">
    <a href="{!! route('balancesheet.expenses.index') !!}"><i class="fa fa-edit"></i><span>Expenses</span></a>
</li>

<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{!! route('invoices.invoices.index') !!}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li>

<li class="{{ Request::is('invoicesDesigns*') ? 'active' : '' }}">
    <a href="{!! route('invoices.invoicesDesigns.index') !!}"><i class="fa fa-edit"></i><span>InvoicesDesigns</span></a>
</li>

<li class="{{ Request::is('invoiceItems*') ? 'active' : '' }}">
    <a href="{!! route('invoices.invoiceItems.index') !!}"><i class="fa fa-edit"></i><span>InvoiceItems</span></a>
</li>

<li class="{{ Request::is('leads*') ? 'active' : '' }}">
    <a href="{!! route('leads.leads.index') !!}"><i class="fa fa-edit"></i><span>Leads</span></a>
</li>

<li class="{{ Request::is('relationTypes*') ? 'active' : '' }}">
    <a href="{!! route('relations.relationTypes.index') !!}"><i class="fa fa-edit"></i><span>RelationTypes</span></a>
</li>

<li class="{{ Request::is('activityPriorities*') ? 'active' : '' }}">
    <a href="{!! route('core.activityPriorities.index') !!}"><i class="fa fa-edit"></i><span>ActivityPriorities</span></a>
</li>

<li class="{{ Request::is('activityStatuses*') ? 'active' : '' }}">
    <a href="{!! route('core.activityStatuses.index') !!}"><i class="fa fa-edit"></i><span>ActivityStatuses</span></a>
</li>

<li class="{{ Request::is('activityTypes*') ? 'active' : '' }}">
    <a href="{!! route('core.activityTypes.index') !!}"><i class="fa fa-edit"></i><span>ActivityTypes</span></a>
</li>

<li class="{{ Request::is('contactTypes*') ? 'active' : '' }}">
    <a href="{!! route('relations.contactTypes.index') !!}"><i class="fa fa-edit"></i><span>ContactTypes</span></a>
</li>

<li class="{{ Request::is('leadSources*') ? 'active' : '' }}">
    <a href="{!! route('leads.leadSources.index') !!}"><i class="fa fa-edit"></i><span>LeadSources</span></a>
</li>

<li class="{{ Request::is('leadStatuses*') ? 'active' : '' }}">
    <a href="{!! route('leads.leadStatuses.index') !!}"><i class="fa fa-edit"></i><span>LeadStatuses</span></a>
</li>

<li class="{{ Request::is('opportunityStages*') ? 'active' : '' }}">
    <a href="{!! route('leads.opportunityStages.index') !!}"><i class="fa fa-edit"></i><span>OpportunityStages</span></a>
</li>

<li class="{{ Request::is('opportunityTypes*') ? 'active' : '' }}">
    <a href="{!! route('leads.opportunityTypes.index') !!}"><i class="fa fa-edit"></i><span>OpportunityTypes</span></a>
</li>

<li class="{{ Request::is('salutations*') ? 'active' : '' }}">
    <a href="{!! route('relations.salutations.index') !!}"><i class="fa fa-edit"></i><span>Salutations</span></a>
</li>

<li class="{{ Request::is('mailboxes*') ? 'active' : '' }}">
    <a href="{!! route('email.mailboxes.index') !!}"><i class="fa fa-edit"></i><span>Mailboxes</span></a>
</li>

<li class="{{ Request::is('mailTemplates*') ? 'active' : '' }}">
    <a href="{!! route('email.mailTemplates.index') !!}"><i class="fa fa-edit"></i><span>MailTemplates</span></a>
</li>

<li class="{{ Request::is('mailtemplatesSets*') ? 'active' : '' }}">
    <a href="{!! route('email.mailtemplatesSets.index') !!}"><i class="fa fa-edit"></i><span>MailtemplatesSets</span></a>
</li>

<li class="{{ Request::is('mailtemplatesTypes*') ? 'active' : '' }}">
    <a href="{!! route('email.mailtemplatesTypes.index') !!}"><i class="fa fa-edit"></i><span>MailtemplatesTypes</span></a>
</li>

<li class="{{ Request::is('opportunities*') ? 'active' : '' }}">
    <a href="{!! route('leads.opportunities.index') !!}"><i class="fa fa-edit"></i><span>Opportunities</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{!! route('banking.payments.index') !!}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('core.permissions.index') !!}"><i class="fa fa-edit"></i><span>Permissions</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('relations*') ? 'active' : '' }}">
    <a href="{!! route('relations.relations.index') !!}"><i class="fa fa-edit"></i><span>Relations</span></a>
</li>

<li class="{{ Request::is('relationAdresses*') ? 'active' : '' }}">
    <a href="{!! route('relations.relationAdresses.index') !!}"><i class="fa fa-edit"></i><span>RelationAdresses</span></a>
</li>

<li class="{{ Request::is('relationCommunications*') ? 'active' : '' }}">
    <a href="{!! route('relations.relationCommunications.index') !!}"><i class="fa fa-edit"></i><span>RelationCommunications</span></a>
</li>

<li class="{{ Request::is('relationContracts*') ? 'active' : '' }}">
    <a href="{!! route('relations.relationContracts.index') !!}"><i class="fa fa-edit"></i><span>RelationContracts</span></a>
</li>

<li class="{{ Request::is('relationMailAdresses*') ? 'active' : '' }}">
    <a href="{!! route('relations.relationMailAdresses.index') !!}"><i class="fa fa-edit"></i><span>RelationMailAdresses</span></a>
</li>

<li class="{{ Request::is('settingsAlertNotices*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsAlertNotices.index') !!}"><i class="fa fa-edit"></i><span>SettingsAlertNotices</span></a>
</li>

<li class="{{ Request::is('settingsAutoResponses*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsAutoResponses.index') !!}"><i class="fa fa-edit"></i><span>SettingsAutoResponses</span></a>
</li>

<li class="{{ Request::is('settingsEmails*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsEmails.index') !!}"><i class="fa fa-edit"></i><span>SettingsEmails</span></a>
</li>

<li class="{{ Request::is('settingsSystems*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsSystems.index') !!}"><i class="fa fa-edit"></i><span>SettingsSystems</span></a>
</li>

<li class="{{ Request::is('settingsTickets*') ? 'active' : '' }}">
    <a href="{!! route('core.settingsTickets.index') !!}"><i class="fa fa-edit"></i><span>SettingsTickets</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('taggableTaggables*') ? 'active' : '' }}">
    <a href="{!! route('core.taggableTaggables.index') !!}"><i class="fa fa-edit"></i><span>TaggableTaggables</span></a>
</li>

<li class="{{ Request::is('taggableTags*') ? 'active' : '' }}">
    <a href="{!! route('core.taggableTags.index') !!}"><i class="fa fa-edit"></i><span>TaggableTags</span></a>
</li>

<li class="{{ Request::is('taxRates*') ? 'active' : '' }}">
    <a href="{!! route('taxes.taxRates.index') !!}"><i class="fa fa-edit"></i><span>TaxRates</span></a>
</li>

<li class="{{ Request::is('teamStaffs*') ? 'active' : '' }}">
    <a href="{!! route('employees.teamStaffs.index') !!}"><i class="fa fa-edit"></i><span>TeamStaffs</span></a>
</li>

<li class="{{ Request::is('teams*') ? 'active' : '' }}">
    <a href="{!! route('employees.teams.index') !!}"><i class="fa fa-edit"></i><span>Teams</span></a>
</li>

<li class="{{ Request::is('ticketCategories*') ? 'active' : '' }}">
    <a href="{!! route('tickets.ticketCategories.index') !!}"><i class="fa fa-edit"></i><span>TicketCategories</span></a>
</li>

<li class="{{ Request::is('ticketHelpTopics*') ? 'active' : '' }}">
    <a href="{!! route('tickets.ticketHelpTopics.index') !!}"><i class="fa fa-edit"></i><span>TicketHelpTopics</span></a>
</li>

<li class="{{ Request::is('ticketSources*') ? 'active' : '' }}">
    <a href="{!! route('tickets.ticketSources.index') !!}"><i class="fa fa-edit"></i><span>TicketSources</span></a>
</li>

<li class="{{ Request::is('ticketTypes*') ? 'active' : '' }}">
    <a href="{!! route('tickets.ticketTypes.index') !!}"><i class="fa fa-edit"></i><span>TicketTypes</span></a>
</li>

<li class="{{ Request::is('userRoles*') ? 'active' : '' }}">
    <a href="{!! route('core.userRoles.index') !!}"><i class="fa fa-edit"></i><span>UserRoles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('core.users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('userSettings*') ? 'active' : '' }}">
    <a href="{!! route('core.userSettings.index') !!}"><i class="fa fa-edit"></i><span>UserSettings</span></a>
</li>

<li class="{{ Request::is('workflowActions*') ? 'active' : '' }}">
    <a href="{!! route('workflows.workflowActions.index') !!}"><i class="fa fa-edit"></i><span>WorkflowActions</span></a>
</li>

<li class="{{ Request::is('workflowCloses*') ? 'active' : '' }}">
    <a href="{!! route('workflows.workflowCloses.index') !!}"><i class="fa fa-edit"></i><span>WorkflowCloses</span></a>
</li>

<li class="{{ Request::is('workflowNames*') ? 'active' : '' }}">
    <a href="{!! route('workflows.workflowNames.index') !!}"><i class="fa fa-edit"></i><span>WorkflowNames</span></a>
</li>

<li class="{{ Request::is('workflowRules*') ? 'active' : '' }}">
    <a href="{!! route('workflows.workflowRules.index') !!}"><i class="fa fa-edit"></i><span>WorkflowRules</span></a>
</li>

<li class="{{ Request::is('teamAssigns*') ? 'active' : '' }}">
    <a href="{!! route('core.teamAssigns.index') !!}"><i class="fa fa-edit"></i><span>TeamAssigns</span></a>
</li>

