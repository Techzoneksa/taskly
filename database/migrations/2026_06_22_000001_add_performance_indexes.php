<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // tasks table indexes
        if (Schema::hasTable('tasks')) {
            Schema::table('tasks', function (Blueprint $table) {
                if (!Schema::hasIndex('tasks', 'idx_tasks_priority')) {
                    $table->index('priority', 'idx_tasks_priority');
                }
                if (!Schema::hasIndex('tasks', 'idx_tasks_due_date')) {
                    $table->index('due_date', 'idx_tasks_due_date');
                }
                if (!Schema::hasIndex('tasks', 'idx_tasks_created_at')) {
                    $table->index('created_at', 'idx_tasks_created_at');
                }
                if (!Schema::hasIndex('tasks', 'idx_tasks_end_date')) {
                    $table->index('end_date', 'idx_tasks_end_date');
                }
                if (!Schema::hasIndex('tasks', 'idx_tasks_stage_id')) {
                    $table->index('task_stage_id', 'idx_tasks_stage_id');
                }
                if (!Schema::hasIndex('tasks', 'idx_tasks_assigned_to')) {
                    $table->index('assigned_to', 'idx_tasks_assigned_to');
                }
            });
        }

        // projects table indexes
        if (Schema::hasTable('projects')) {
            Schema::table('projects', function (Blueprint $table) {
                if (!Schema::hasIndex('projects', 'idx_projects_status')) {
                    $table->index('status', 'idx_projects_status');
                }
                if (!Schema::hasIndex('projects', 'idx_projects_deadline')) {
                    $table->index('deadline', 'idx_projects_deadline');
                }
                if (!Schema::hasIndex('projects', 'idx_projects_priority')) {
                    $table->index('priority', 'idx_projects_priority');
                }
                if (!Schema::hasIndex('projects', 'idx_projects_created_at')) {
                    $table->index('created_at', 'idx_projects_created_at');
                }
                if (!Schema::hasIndex('projects', 'idx_projects_workspace_id')) {
                    $table->index('workspace_id', 'idx_projects_workspace_id');
                }
            });
        }

        // project_activities table - had NO indexes at all
        if (Schema::hasTable('project_activities')) {
            Schema::table('project_activities', function (Blueprint $table) {
                if (!Schema::hasIndex('project_activities', 'idx_activities_project_id')) {
                    $table->index('project_id', 'idx_activities_project_id');
                }
                if (!Schema::hasIndex('project_activities', 'idx_activities_user_id')) {
                    $table->index('user_id', 'idx_activities_user_id');
                }
                if (!Schema::hasIndex('project_activities', 'idx_activities_created_at')) {
                    $table->index('created_at', 'idx_activities_created_at');
                }
                if (!Schema::hasIndex('project_activities', 'idx_activities_project_created')) {
                    $table->index(['project_id', 'created_at'], 'idx_activities_project_created');
                }
            });
        }

        // task_comments table indexes
        if (Schema::hasTable('task_comments')) {
            Schema::table('task_comments', function (Blueprint $table) {
                if (!Schema::hasIndex('task_comments', 'idx_comments_task_id')) {
                    $table->index('task_id', 'idx_comments_task_id');
                }
                if (!Schema::hasIndex('task_comments', 'idx_comments_user_id')) {
                    $table->index('user_id', 'idx_comments_user_id');
                }
                if (!Schema::hasIndex('task_comments', 'idx_comments_created_at')) {
                    $table->index('created_at', 'idx_comments_created_at');
                }
            });
        }

        // timesheet_entries - add date composite index
        if (Schema::hasTable('timesheet_entries')) {
            Schema::table('timesheet_entries', function (Blueprint $table) {
                if (!Schema::hasIndex('timesheet_entries', 'idx_entries_user_date')) {
                    $table->index(['user_id', 'date'], 'idx_entries_user_date');
                }
                if (!Schema::hasIndex('timesheet_entries', 'idx_entries_timesheet_id')) {
                    $table->index('timesheet_id', 'idx_entries_timesheet_id');
                }
            });
        }

        // notifications table indexes if exists
        if (Schema::hasTable('notifications')) {
            Schema::table('notifications', function (Blueprint $table) {
                if (!Schema::hasIndex('notifications', 'idx_notifications_notifiable')) {
                    $table->index(['notifiable_type', 'notifiable_id'], 'idx_notifications_notifiable');
                }
                if (!Schema::hasIndex('notifications', 'idx_notifications_created_at')) {
                    $table->index('created_at', 'idx_notifications_created_at');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('tasks')) {
            Schema::table('tasks', function (Blueprint $table) {
                $table->dropIndex('idx_tasks_priority');
                $table->dropIndex('idx_tasks_due_date');
                $table->dropIndex('idx_tasks_created_at');
                $table->dropIndex('idx_tasks_end_date');
                $table->dropIndex('idx_tasks_stage_id');
                $table->dropIndex('idx_tasks_assigned_to');
            });
        }

        if (Schema::hasTable('projects')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->dropIndex('idx_projects_status');
                $table->dropIndex('idx_projects_deadline');
                $table->dropIndex('idx_projects_priority');
                $table->dropIndex('idx_projects_created_at');
                $table->dropIndex('idx_projects_workspace_id');
            });
        }

        if (Schema::hasTable('project_activities')) {
            Schema::table('project_activities', function (Blueprint $table) {
                $table->dropIndex('idx_activities_project_id');
                $table->dropIndex('idx_activities_user_id');
                $table->dropIndex('idx_activities_created_at');
                $table->dropIndex('idx_activities_project_created');
            });
        }

        if (Schema::hasTable('task_comments')) {
            Schema::table('task_comments', function (Blueprint $table) {
                $table->dropIndex('idx_comments_task_id');
                $table->dropIndex('idx_comments_user_id');
                $table->dropIndex('idx_comments_created_at');
            });
        }

        if (Schema::hasTable('timesheet_entries')) {
            Schema::table('timesheet_entries', function (Blueprint $table) {
                $table->dropIndex('idx_entries_user_date');
                $table->dropIndex('idx_entries_timesheet_id');
            });
        }

        if (Schema::hasTable('notifications')) {
            Schema::table('notifications', function (Blueprint $table) {
                $table->dropIndex('idx_notifications_notifiable');
                $table->dropIndex('idx_notifications_created_at');
            });
        }
    }
};