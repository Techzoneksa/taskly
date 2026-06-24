<?php

namespace Database\Seeders;

use App\Models\EmailTemplate;
use App\Models\EmailTemplateLang;
use App\Models\UserEmailTemplate;
use Illuminate\Database\Seeder;

class EmailTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $supportedLanguages = ['en', 'ar'];

        $templates = [
            [
                'name' => 'Workspace Invitation',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'You have been invited to join {workspace_name}',
                        'content' => '<h2>You have been invited to a workspace!</h2><p>Hello <strong>{user_name}</strong>,</p><p>You have been invited by <strong>{invited_by_name}</strong> to join the workspace "<strong>{workspace_name}</strong>".</p><p><strong>Workspace:</strong> {workspace_name}</p><p><strong>Invited by:</strong> {invited_by_name}</p><p><strong>Role:</strong> {role}</p><p>Click the button below to accept the invitation:</p><p><a href="{invitation_link}" style="background-color: #007bff; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold;">Accept Invitation</a></p><p>After accepting, you can start collaborating with your team members in this workspace.</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تمت دعوتك للانضمام إلى {workspace_name}',
                        'content' => '<h2>تمت دعوتك إلى مساحة عمل!</h2><p>مرحباً <strong>{user_name}</strong>،</p><p>تمت دعوتك من قبل <strong>{invited_by_name}</strong> للانضمام إلى مساحة العمل "<strong>{workspace_name}</strong>".</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p><strong>دعوة من:</strong> {invited_by_name}</p><p><strong>الدور:</strong> {role}</p><p>انقر على الزر أدناه لقبول الدعوة:</p><p><a href="{invitation_link}" style="background-color: #007bff; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold;">قبول الدعوة</a></p><p>بعد القبول، يمكنك البدء في التعاون مع أعضاء فريقك في مساحة العمل هذه.</p><p>أطيب التحيات،<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Project Assignment',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'You have been assigned to project {project_name} in {workspace_name}',
                        'content' => '<h2>You have been assigned to a project!</h2><p>Hello <strong>{assigned_user_name}</strong>,</p><p>You have been assigned by <strong>{assigned_by_name}</strong> to the project "<strong>{project_name}</strong>" as a <strong>{role}</strong>.</p><p><strong>Project:</strong> {project_name}</p><p><strong>Your Role:</strong> {role}</p><p><strong>Assigned By:</strong> {assigned_by_name}</p><p><strong>Description:</strong> {project_description}</p><p>You can now access this project and start collaborating with your team.</p><p>Best regards,<br><strong>The {company_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم تعيينك إلى المشروع {project_name} في {workspace_name}',
                        'content' => '<h2>تم تعيينك إلى مشروع!</h2><p>مرحباً <strong>{user_name}</strong>,</p><p>لقد قام <strong>{assigned_by_name}</strong> بتعيينك في المشروع "<strong>{project_name}</strong>" كـ<strong>{role}</strong>.</p><p><strong>المشروع:</strong> {project_name}</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p><strong>دورك:</strong> {role}</p><p><strong>المعين بواسطة:</strong> {assigned_by_name}</p><p><strong>الوصف:</strong> {project_description}</p><p>يمكنك الآن الوصول إلى هذا المشروع والبدء في التعاون مع فريقك.</p><p>مع أطيب التحيات,<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Task Assignment',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'You have been assigned to a task in {project_name}',
                        'content' => '<h2>You have been assigned to a task!</h2><p>Hello <strong>{assigned_user_name}</strong>,</p><p>You have been assigned by <strong>{assigned_by_name}</strong> to the task "<strong>{task_title}</strong>" in project <strong>{project_name}</strong>.</p><p><strong>Task:</strong> {task_title}</p><p><strong>Project:</strong> {project_name}</p><p><strong>Priority:</strong> {task_priority}</p><p><strong>Start Date:</strong> {start_date}</p><p><strong>End Date:</strong> {end_date}</p><p><strong>Assigned By:</strong> {assigned_by_name}</p><p><strong>Description:</strong> {task_description}</p><p>You can now access this task and start working on it. Please log in to your account to view the task details.</p><p>Best regards,<br><strong>The {company_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم تعيينك لمهمة في {project_name}',
                        'content' => '<h2>تم تعيينك لمهمة!</h2><p>مرحباً <strong>{assigned_user_name}</strong>,</p><p>لقد تم تعيينك من قبل <strong>{assigned_by_name}</strong> للمهمة "<strong>{task_title}</strong>" في المشروع <strong>{project_name}</strong>.</p><p><strong>المهمة:</strong> {task_title}</p><p><strong>المشروع:</strong> {project_name}</p><p><strong>مساحة العمل:</strong> {project_name}</p><p><strong>الأولوية:</strong> {task_priority}</p><p><strong>تاريخ البدء:</strong> {start_date}</p><p><strong>تاريخ الانتهاء:</strong> {end_date}</p><p><strong>المُعين بواسطة:</strong> {assigned_by_name}</p><p><strong>الوصف:</strong> {task_description}</p><p>يمكنك الآن الوصول إلى هذه المهمة والبدء بالعمل عليها. يرجى تسجيل الدخول إلى حسابك لعرض التفاصيل.</p><p>مع أطيب التحيات,<br><strong>فريق {company_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Bug Assignment',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'You have been assigned to a bug in {workspace_name}',
                        'content' => '<h2>You have been assigned to a bug!</h2><p>Hello <strong>{assigned_user_name}</strong>,</p><p>You have been assigned by <strong>{assigned_by_name}</strong> to the bug "<strong>{bug_title}</strong>" in project <strong>{project_name}</strong>.</p><p><strong>Bug:</strong> {bug_title}</p><p><strong>Project:</strong> {project_name}</p><p><strong>Priority:</strong> {bug_priority}</p><p><strong>Severity:</strong> {bug_severity}</p><p><strong>Start Date:</strong> {start_date}</p><p><strong>End Date:</strong> {end_date}</p><p><strong>Assigned By:</strong> {assigned_by_name}</p><p><strong>Description:</strong> {bug_description}</p><p>You can now access this bug and start working on it. Please log in to your account to view the bug details.</p><p>Best regards,<br><strong>The {company_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم تعيينك على خطأ في {workspace_name}',
                        'content' => '<h2>تم تعيينك على خطأ!</h2><p>مرحباً <strong>{assigned_user_name}</strong>,</p><p>لقد قام <strong>{assigned_by_name}</strong> بتعيينك على الخطأ "<strong>{bug_title}</strong>" في المشروع <strong>{project_name}</strong>.</p><p><strong>الخطأ:</strong> {bug_title}</p><p><strong>المشروع:</strong> {project_name}</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p><strong>الأولوية:</strong> {bug_priority}</p><p><strong>الخطورة:</strong> {bug_severity}</p><p><strong>تاريخ البداية:</strong> {start_date}</p><p><strong>تاريخ الانتهاء:</strong> {end_date}</p><p><strong>المعين بواسطة:</strong> {assigned_by_name}</p><p><strong>الوصف:</strong> {bug_description}</p><p>يمكنك الآن الوصول إلى هذا الخطأ وبدء العمل عليه. الرجاء تسجيل الدخول لمشاهدة تفاصيل الخطأ.</p><p>مع أطيب التحيات,<br><strong>فريق {company_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Expense Notification',
                'from' => 'Finance Team',
                'translations' => [
'en' => [
                        'subject' => 'New Expense Created: {expense_title}',
                        'content' => '<h2>New Expense Created</h2><p>Hello,</p><p>A new expense has been created in project <strong>{project_name}</strong>.</p><p><strong>Expense:</strong> {expense_title}</p><p><strong>Amount:</strong> {expense_amount}</p><p><strong>Category:</strong> {expense_category}</p><p><strong>Date:</strong> {expense_date}</p><p><strong>Created by:</strong> {created_by_name}</p><p><strong>Description:</strong> {expense_description}</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم إنشاء مصروف جديد: {expense_title}',
                        'content' => '<h2>تم إنشاء مصروف جديد</h2><p>مرحباً،</p><p>تم إنشاء مصروف جديد في المشروع <strong>{project_name}</strong>.</p><p><strong>المصروف:</strong> {expense_title}</p><p><strong>المبلغ:</strong> {expense_amount}</p><p><strong>الفئة:</strong> {expense_category}</p><p><strong>التاريخ:</strong> {expense_date}</p><p><strong>تم الإنشاء بواسطة:</strong> {created_by_name}</p><p><strong>الوصف:</strong> {expense_description}</p><p>مع أطيب التحيات,<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Invoice Notification',
                'from' => 'Billing Team',
                'translations' => [
'en' => [
                        'subject' => 'New Invoice Created: {invoice_number}',
                        'content' => '<h2>New Invoice Created</h2><p>Hello <strong>{client_name}</strong>,</p><p>A new invoice has been created for you.</p><p><strong>Invoice Number:</strong> {invoice_number}</p><p><strong>Invoice Title:</strong> {invoice_title}</p><p><strong>Project:</strong> {project_name}</p><p><strong>Total Amount:</strong> {total_amount} {currency}</p><p><strong>Due Date:</strong> {due_date}</p><p><strong>Workspace:</strong> {workspace_name}</p><p><strong>Created by:</strong> {creator_name}</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم إنشاء فاتورة جديدة: {invoice_number}',
                        'content' => '<h2>تم إنشاء فاتورة جديدة</h2><p>مرحباً <strong>{client_name}</strong>،</p><p>تم إنشاء فاتورة جديدة لك.</p><p><strong>رقم الفاتورة:</strong> {invoice_number}</p><p><strong>عنوان الفاتورة:</strong> {invoice_title}</p><p><strong>المشروع:</strong> {project_name}</p><p><strong>المبلغ الإجمالي:</strong> {total_amount} {currency}</p><p><strong>تاريخ الاستحقاق:</strong> {due_date}</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p><strong>تم الإنشاء بواسطة:</strong> {creator_name}</p><p>مع أطيب التحيات,<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'New Contract',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'New Contract Created: {contract_subject}',
                        'content' => '<h2>New Contract Created</h2><p>Hello <strong>{client_name}</strong>,</p><p>A new contract has been created for you.</p><p><strong>Contract ID:</strong> {contract_id}</p><p><strong>Subject:</strong> {contract_subject}</p><p><strong>Contract Type:</strong> {contract_type}</p><p><strong>Description:</strong> {contract_description}</p><p><strong>Contract Value:</strong> {contract_value} {currency}</p><p><strong>Start Date:</strong> {start_date}</p><p><strong>End Date:</strong> {end_date}</p><p><strong>Status:</strong> {status}</p><p><strong>Created by:</strong> {creator_name}</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم إنشاء عقد جديد: {contract_subject}',
                        'content' => '<h2>تم إنشاء عقد جديد</h2><p>مرحباً <strong>{client_name}</strong>،</p><p>تم إنشاء عقد جديد لك.</p><p><strong>معرف العقد:</strong> {contract_id}</p><p><strong>الموضوع:</strong> {contract_subject}</p><p><strong>نوع العقد:</strong> {contract_type}</p><p><strong>الوصف:</strong> {contract_description}</p><p><strong>قيمة العقد:</strong> {contract_value} {currency}</p><p><strong>تاريخ البداية:</strong> {start_date}</p><p><strong>تاريخ الانتهاء:</strong> {end_date}</p><p><strong>الحالة:</strong> {status}</p><p><strong>تم الإنشاء بواسطة:</strong> {creator_name}</p><p>مع أطيب التحيات,<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Zoom Meeting Notification',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'Zoom Meeting Invitation: {meeting_title}',
                        'content' => '<h2>You have been invited to a Zoom meeting!</h2><p>Hello <strong>{member_name}</strong>,</p><p>You have been invited to join the Zoom meeting "<strong>{meeting_title}</strong>".</p><p><strong>Meeting:</strong> {meeting_title}</p><p><strong>Project:</strong> {project_name}</p><p><strong>Start Time:</strong> {start_time}</p><p><strong>Duration:</strong> {duration} minutes</p><p><strong>Organizer:</strong> {organizer_name}</p><p><strong>Description:</strong> {meeting_description}</p><p><strong>Join URL:</strong> <a href="{join_url}">{join_url}</a></p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'دعوة لاجتماع Zoom: {meeting_title}',
                        'content' => '<h2>تمت دعوتك لاجتماع Zoom!</h2><p>مرحباً <strong>{member_name}</strong>،</p><p>تمت دعوتك للانضمام إلى اجتماع Zoom "<strong>{meeting_title}</strong>".</p><p><strong>الاجتماع:</strong> {meeting_title}</p><p><strong>المشروع:</strong> {project_name}</p><p><strong>وقت البداية:</strong> {start_time}</p><p><strong>المدة:</strong> {duration} دقيقة</p><p><strong>المنظم:</strong> {organizer_name}</p><p><strong>الوصف:</strong> {meeting_description}</p><p><strong>رابط الانضمام:</strong> <a href="{join_url}">{join_url}</a></p><p>مع أطيب التحيات,<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Google Meeting Notification',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'Google Meet Invitation: {meeting_title}',
                        'content' => '<h2>You have been invited to a Google Meet!</h2><p>Hello <strong>{member_name}</strong>,</p><p>You have been invited to join the Google Meet "<strong>{meeting_title}</strong>".</p><p><strong>Meeting:</strong> {meeting_title}</p><p><strong>Project:</strong> {project_name}</p><p><strong>Start Time:</strong> {start_time}</p><p><strong>Duration:</strong> {duration} minutes</p><p><strong>Organizer:</strong> {organizer_name}</p><p><strong>Description:</strong> {meeting_description}</p><p><strong>Join URL:</strong> <a href="{join_url}">{join_url}</a></p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'دعوة لـ Google Meet: {meeting_title}',
                        'content' => '<h2>تمت دعوتك إلى Google Meet!</h2><p>مرحباً <strong>{member_name}</strong>،</p><p>تمت دعوتك للانضمام إلى Google Meet "<strong>{meeting_title}</strong>".</p><p><strong>الاجتماع:</strong> {meeting_title}</p><p><strong>المشروع:</strong> {project_name}</p><p><strong>وقت البداية:</strong> {start_time}</p><p><strong>المدة:</strong> {duration} دقيقة</p><p><strong>المنظم:</strong> {organizer_name}</p><p><strong>الوصف:</strong> {meeting_description}</p><p><strong>رابط الانضمام:</strong> <a href="{join_url}">{join_url}</a></p><p>مع أطيب التحيات,<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Todo Created',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'New ToDo Shared: {todo_title}',
                        'content' => '<h2>You have been added to a ToDo!</h2><p>Hello <strong>{member_name}</strong>,</p><p><strong>{created_by_name}</strong> has shared a new ToDo with you in workspace <strong>{workspace_name}</strong>.</p><p><strong>ToDo:</strong> {todo_title}</p><p><strong>Description:</strong> {todo_description}</p><p><strong>Priority:</strong> {todo_priority}</p><p><strong>Status:</strong> {todo_status}</p><p><strong>Due Date:</strong> {due_date}</p><p><strong>Workspace:</strong> {workspace_name}</p><p>You can now view and track this ToDo in your workspace.</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'مهمة جديدة مشتركة: {todo_title}',
                        'content' => '<h2>تمت إضافتك إلى مهمة!</h2><p>مرحباً <strong>{member_name}</strong>،</p><p>قام <strong>{created_by_name}</strong> بمشاركة مهمة جديدة معك في مساحة العمل <strong>{workspace_name}</strong>.</p><p><strong>المهمة:</strong> {todo_title}</p><p><strong>الوصف:</strong> {todo_description}</p><p><strong>الأولوية:</strong> {todo_priority}</p><p><strong>الحالة:</strong> {todo_status}</p><p><strong>تاريخ الاستحقاق:</strong> {due_date}</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p>يمكنك الآن عرض وتتبع هذه المهمة في مساحة العمل الخاصة بك.</p><p>مع أطيب التحيات،<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Todo Status Updated',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'ToDo Status Updated: {todo_title}',
                        'content' => '<h2>ToDo Status Has Been Updated!</h2><p>Hello <strong>{member_name}</strong>,</p><p>The status of ToDo "<strong>{todo_title}</strong>" has been updated in workspace <strong>{workspace_name}</strong>.</p><p><strong>ToDo:</strong> {todo_title}</p><p><strong>Description:</strong> {todo_description}</p><p><strong>Priority:</strong> {todo_priority}</p><p><strong>Previous Status:</strong> {old_status}</p><p><strong>New Status:</strong> {new_status}</p><p><strong>Due Date:</strong> {due_date}</p><p><strong>Workspace:</strong> {workspace_name}</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تم تحديث حالة المهمة: {todo_title}',
                        'content' => '<h2>تم تحديث حالة المهمة!</h2><p>مرحباً <strong>{member_name}</strong>،</p><p>تم تحديث حالة المهمة "<strong>{todo_title}</strong>" في مساحة العمل <strong>{workspace_name}</strong>.</p><p><strong>المهمة:</strong> {todo_title}</p><p><strong>الوصف:</strong> {todo_description}</p><p><strong>الأولوية:</strong> {todo_priority}</p><p><strong>الحالة السابقة:</strong> {old_status}</p><p><strong>الحالة الجديدة:</strong> {new_status}</p><p><strong>تاريخ الاستحقاق:</strong> {due_date}</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p>مع أطيب التحيات،<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ],
            [
                'name' => 'Todo Comments Added',
                'from' => 'Support Team',
                'translations' => [
'en' => [
                        'subject' => 'New Comment/Attachment on ToDo: {todo_title}',
                        'content' => '<h2>New Activity on Your ToDo!</h2><p>Hello <strong>{member_name}</strong>,</p><p><strong>{created_by_name}</strong> has added a new {activity_type} to the ToDo "<strong>{todo_title}</strong>" in workspace <strong>{workspace_name}</strong>.</p><p><strong>ToDo:</strong> {todo_title}</p><p><strong>Priority:</strong> {todo_priority}</p><p><strong>Status:</strong> {todo_status}</p><p><strong>Due Date:</strong> {due_date}</p><p><strong>Activity:</strong> {activity_type}</p><p><strong>Workspace:</strong> {workspace_name}</p><p>You can view the full details and respond in your workspace.</p><p>Best regards,<br><strong>The {app_name} Team</strong></p>'
                    ],
'ar' => [
                        'subject' => 'تعليق/مرفق جديد على المهمة: {todo_title}',
                        'content' => '<h2>نشاط جديد على مهمتك!</h2><p>مرحباً <strong>{member_name}</strong>،</p><p>قام <strong>{created_by_name}</strong> بإضافة {activity_type} جديد إلى المهمة "<strong>{todo_title}</strong>" في مساحة العمل <strong>{workspace_name}</strong>.</p><p><strong>المهمة:</strong> {todo_title}</p><p><strong>الأولوية:</strong> {todo_priority}</p><p><strong>الحالة:</strong> {todo_status}</p><p><strong>تاريخ الاستحقاق:</strong> {due_date}</p><p><strong>النشاط:</strong> {activity_type}</p><p><strong>مساحة العمل:</strong> {workspace_name}</p><p>يمكنك عرض التفاصيل الكاملة والرد في مساحة العمل الخاصة بك.</p><p>مع أطيب التحيات،<br><strong>فريق {app_name}</strong></p>'
                    ],
                ]
            ]
        ];

        foreach ($templates as $templateData) {
            $template = EmailTemplate::updateOrCreate([
                'name' => $templateData['name'],
                'from' => $templateData['from'],
                'user_id' => auth()->id() ?? 1
            ]);

            foreach ($supportedLanguages as $langCode) {
                $translation = $templateData['translations'][$langCode] ?? $templateData['translations']['en'];

                EmailTemplateLang::updateOrCreate([
                    'parent_id' => $template->id,
                    'lang' => $langCode,
                    'subject' => $translation['subject'],
                    'content' => $translation['content']
                ]);
            }

        }

        // Enable "Workspace Invitation" notification for all existing users
        $this->enableWorkspaceInvitationForExistingUsers();
    }

    /**
     * Enable "Workspace Invitation" email notification for all existing users
     */
    private function enableWorkspaceInvitationForExistingUsers(): void
    {
        $template = EmailTemplate::where('name', 'Workspace Invitation')->first();
        
        if ($template) {
            $users = \App\Models\User::with('workspaces')->get();
            
            foreach ($users as $user) {
                foreach ($user->workspaces as $workspace) {
                    UserEmailTemplate::updateOrCreate(
                        [
                            'user_id' => $user->id,
                            'template_id' => $template->id,
                            'workspace_id' => $workspace->id
                        ],
                        ['is_active' => true]
                    );
                }
            }
        }
    }
}