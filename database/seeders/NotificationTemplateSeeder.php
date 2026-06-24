<?php

namespace Database\Seeders;

use App\Models\NotificationTemplate;
use App\Models\NotificationTemplateLang;
use App\Models\UserNotificationTemplate;
use App\Models\User;
use Illuminate\Database\Seeder;

class NotificationTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $supportedLanguages = ['en', 'ar'];
        $langCodes = $supportedLanguages;

        $templates = [
            [
                'name' => 'New Task',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'New Task Assigned: {task_title}',
                        'content' => 'You have been assigned a new task "{task_title}". Priority: {priority}. Due date: {due_date}. Assigned by: {assigned_by}.'
                    ],
'ar' => [
                        'title' => 'تم تعيين مهمة جديدة: {task_title}',
                        'content' => 'تم تعيين مهمة جديدة لك "{task_title}". الأولوية: {priority}. تاريخ الاستحقاق: {due_date}. تم التعيين بواسطة: {assigned_by}.'
                    ],
                ]
            ],



            [
                'name' => 'New Milestone',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'New Milestone: {milestone_title}',
                        'content' => 'Milestone "{milestone_title}" created in {project_name}. Due: {due_date}.'
                    ],
'ar' => [
                        'title' => 'معلم جديد: {milestone_title}',
                        'content' => 'معلم "{milestone_title}" أُنشئ في {project_name}. الاستحقاق: {due_date}.'
                    ],
                ]
            ],

            [
                'name' => 'New Task Comment',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'New Comment: {task_title}',
                        'content' => '{commenter_name} commented on "{task_title}": {comment_text}'
                    ],
'ar' => [
                        'title' => 'تعليق جديد: {task_title}',
                        'content' => '{commenter_name} علّق على "{task_title}": {comment_text}'
                    ],
                ]
            ],

            // Telegram templates with same names but different content
            [
                'name' => 'New Task',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'New Task: {task_title}',
                        'content' => 'You have a new task "{task_title}". Priority: {priority}. Due: {due_date}.'
                    ],
'ar' => [
                        'title' => 'مهمة جديدة: {task_title}',
                        'content' => 'لديك مهمة جديدة "{task_title}". الأولوية: {priority}. الاستحقاق: {due_date}.'
                    ],
                ]
            ],



            [
                'name' => 'New Milestone',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'Milestone Created: {milestone_title}',
                        'content' => 'New milestone "{milestone_title}" in {project_name}. Due: {due_date}.'
                    ],
'ar' => [
                        'title' => 'تم إنشاء معلم: {milestone_title}',
                        'content' => 'معلم جديد "{milestone_title}" في {project_name}. الاستحقاق: {due_date}.'
                    ],
                ]
            ],

            [
                'name' => 'New Task Comment',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'Comment Added: {task_title}',
                        'content' => '{commenter_name} added a comment to "{task_title}": {comment_text}'
                    ],
'ar' => [
                        'title' => 'تم إضافة تعليق: {task_title}',
                        'content' => '{commenter_name} أضاف تعليقاً على "{task_title}": {comment_text}'
                    ],
                ]
            ],

            // Add Milestone Status Updated for both Slack and Telegram
            [
                'name' => 'Milestone Status Updated',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'Milestone Updated: {milestone_title}',
                        'content' => 'Milestone "{milestone_title}" status changed to {status} by {updated_by}.'
                    ],
'ar' => [
                        'title' => 'تحديث المعلم: {milestone_title}',
                        'content' => 'حالة المعلم "{milestone_title}" تغيرت إلى {status} بواسطة {updated_by}.'
                    ],
                ]
            ],

            [
                'name' => 'Milestone Status Updated',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'Milestone Update: {milestone_title}',
                        'content' => 'Milestone "{milestone_title}" status changed to {status}.'
                    ],
'ar' => [
                        'title' => 'تحديث المعلم: {milestone_title}',
                        'content' => 'حالة المعلم "{milestone_title}" تغيرت إلى {status}.'
                    ],
                ]
            ],

            // Add missing templates for both Slack and Telegram
            [
                'name' => 'New Project',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'New Project Created: {project_name}',
                        'content' => 'A new project "{project_name}" has been created by {created_by}. Start Date: {start_date}. End Date: {end_date}.'
                    ],
'ar' => [
                        'title' => 'تم إنشاء مشروع جديد: {project_name}',
                        'content' => 'تم إنشاء مشروع جديد "{project_name}" بواسطة {created_by}. تاريخ البداية: {start_date}. تاريخ النهاية: {end_date}.'
                    ],
                ]
            ],

            [
                'name' => 'New Project',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'New Project: {project_name}',
                        'content' => 'Project "{project_name}" created by {created_by}. Start: {start_date}. End: {end_date}.'
                    ],
'ar' => [
                        'title' => 'مشروع جديد: {project_name}',
                        'content' => 'مشروع "{project_name}" تم إنشاؤه بواسطة {created_by}. البداية: {start_date}. النهاية: {end_date}.'
                    ],
                ]
            ],

            [
                'name' => 'Task Stage Updated',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'Task Stage Updated: {task_title}',
                        'content' => 'Task "{task_title}" moved from {old_stage} to {new_stage} by {updated_by}.'
                    ],
'ar' => [
                        'title' => 'تم تحديث مرحلة المهمة: {task_title}',
                        'content' => 'تم نقل المهمة "{task_title}" من {old_stage} إلى {new_stage} بواسطة {updated_by}.'
                    ],
                ]
            ],

            [
                'name' => 'Task Stage Updated',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'Task Stage Update: {task_title}',
                        'content' => 'Task "{task_title}" moved from {old_stage} to {new_stage}.'
                    ],
'ar' => [
                        'title' => 'تحديث مرحلة المهمة: {task_title}',
                        'content' => 'تم نقل المهمة "{task_title}" من {old_stage} إلى {new_stage}.'
                    ],
                ]
            ],

            // New Invoice templates
            [
                'name' => 'New Invoice',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'New Invoice Created: {invoice_number}',
                        'content' => 'Invoice {invoice_number} created for {client_name}. Amount: {amount}. Due: {due_date}.'
                    ],
'ar' => [
                        'title' => 'تم إنشاء فاتورة جديدة: {invoice_number}',
                        'content' => 'تم إنشاء الفاتورة {invoice_number} للعميل {client_name}. المبلغ: {amount}. الاستحقاق: {due_date}.'
                    ],
                ]
            ],

            [
                'name' => 'New Invoice',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'New Invoice: {invoice_number}',
                        'content' => 'Invoice {invoice_number} for {client_name}. Amount: {amount}. Due: {due_date}.'
                    ],
'ar' => [
                        'title' => 'فاتورة جديدة: {invoice_number}',
                        'content' => 'فاتورة {invoice_number} للعميل {client_name}. المبلغ: {amount}. الاستحقاق: {due_date}.'
                    ],
                ]
            ],

            // Invoice Status Updated templates
            [
                'name' => 'Invoice Status Updated',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'Invoice Status Updated: {invoice_number}',
                        'content' => 'Invoice {invoice_number} status changed to {status} by {updated_by}.'
                    ],
'ar' => [
                        'title' => 'تم تحديث حالة الفاتورة: {invoice_number}',
                        'content' => 'تغيرت حالة الفاتورة {invoice_number} إلى {status} بواسطة {updated_by}.'
                    ],
                ]
            ],

            [
                'name' => 'Invoice Status Updated',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'Invoice Update: {invoice_number}',
                        'content' => 'Invoice {invoice_number} status changed to {status}.'
                    ],
'ar' => [
                        'title' => 'تحديث الفاتورة: {invoice_number}',
                        'content' => 'حالة الفاتورة {invoice_number} تغيرت إلى {status}.'
                    ],
                ]
            ],

            // Expense Approval templates
            [
                'name' => 'Expense Approval',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'Expense Approval Required: {expense_title}',
                        'content' => 'Expense "{expense_title}" submitted by {submitted_by} requires approval. Amount: {expense_amount}. Project: {project_name}.'
                    ],
'ar' => [
                        'title' => 'مطلوب موافقة على المصروف: {expense_title}',
                        'content' => 'المصروف "{expense_title}" المقدم من {submitted_by} يتطلب الموافقة. المبلغ: {expense_amount}. المشروع: {project_name}.'
                    ],
                ]
            ],

            [
                'name' => 'Expense Approval',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'Expense Approval: {expense_title}',
                        'content' => 'Expense "{expense_title}" by {submitted_by} needs approval. Amount: {expense_amount}.'
                    ],
'ar' => [
                        'title' => 'موافقة المصروف: {expense_title}',
                        'content' => 'المصروف "{expense_title}" من {submitted_by} يحتاج موافقة. المبلغ: {expense_amount}.'
                    ],
                ]
            ],

            // New Budget templates
            [
                'name' => 'New Budget',
                'type' => 'slack',
                'translations' => [
'en' => [
                        'title' => 'New Budget Created: {project_name}',
                        'content' => 'A new budget has been created for project "{project_name}". Total Budget: {total_budget}. Period: {period_type}.'
                    ],
'ar' => [
                        'title' => 'تم إنشاء ميزانية جديدة: {project_name}',
                        'content' => 'تم إنشاء ميزانية جديدة للمشروع "{project_name}". إجمالي الميزانية: {total_budget}. الفترة: {period_type}.'
                    ],
                ]
            ],

            [
                'name' => 'New Budget',
                'type' => 'telegram',
                'translations' => [
'en' => [
                        'title' => 'New Budget: {project_name}',
                        'content' => 'Budget created for "{project_name}". Total: {total_budget}. Period: {period_type}.'
                    ],
'ar' => [
                        'title' => 'ميزانية جديدة: {project_name}',
                        'content' => 'تم إنشاء ميزانية لـ "{project_name}". الإجمالي: {total_budget}. الفترة: {period_type}.'
                    ],
                ]
            ],
        ];

        $companyUsers = User::where('type', 'company')->get();

        foreach ($templates as $templateData) {
            // FIXED: Check both name AND type to prevent duplicates
            $template = NotificationTemplate::updateOrCreate(
                [
                    'name' => $templateData['name'],
                    'type' => $templateData['type']
                ],
                [
                    'name' => $templateData['name'],
                    'type' => $templateData['type']
                ]
            );

            // Create content for each company
            foreach ($companyUsers as $company) {
                foreach ($langCodes as $langCode) {
                    $existingContent = NotificationTemplateLang::where('parent_id', $template->id)
                        ->where('lang', $langCode)
                        ->where('created_by', $company->id)
                        ->first();

                    if ($existingContent) {
                        continue;
                    }

                    $translation = $templateData['translations'][$langCode] ?? $templateData['translations']['en'];

                    NotificationTemplateLang::updateOrCreate([
                        'parent_id' => $template->id,
                        'lang' => $langCode,
                        'created_by' => $company->id
                    ], [
                        'title' => $translation['title'],
                        'content' => $translation['content']
                    ]);
                }
            }

            // Create content for global template
            foreach ($langCodes as $langCode) {
                $existingContent = NotificationTemplateLang::where('parent_id', $template->id)
                    ->where('lang', $langCode)
                    ->where('created_by', 1)
                    ->first();

                if ($existingContent) {
                    continue;
                }

                $translation = $templateData['translations'][$langCode] ?? $templateData['translations']['en'];

                NotificationTemplateLang::create([
                    'parent_id' => $template->id,
                    'lang' => $langCode,
                    'title' => $translation['title'],
                    'content' => $translation['content'],
                    'created_by' => 1
                ]);
            }
        }
    }
}