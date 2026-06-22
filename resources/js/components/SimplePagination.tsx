import React from 'react';
import { useTranslation } from 'react-i18next';
import { Button } from '@/components/ui/button';
import { ChevronLeft, ChevronRight } from 'lucide-react';

interface SimplePaginationProps {
    currentPage: number;
    totalPages: number;
    onPageChange: (page: number) => void;
}

export function SimplePagination({ currentPage, totalPages, onPageChange }: SimplePaginationProps) {
    const { t } = useTranslation();
    if (totalPages <= 1) return null;

    return (
        <div className="flex items-center justify-center space-x-2">
            <Button
                variant="outline"
                size="sm"
                onClick={() => onPageChange(currentPage - 1)}
                disabled={currentPage <= 1}
            >
                <ChevronLeft className="h-4 w-4" />
                {t('Previous')}
            </Button>

            <span className="text-sm text-gray-600">
                {t('Page')} {currentPage} {t('of')} {totalPages}
            </span>

            <Button
                variant="outline"
                size="sm"
                onClick={() => onPageChange(currentPage + 1)}
                disabled={currentPage >= totalPages}
            >
                {t('Next')}
                <ChevronRight className="h-4 w-4" />
            </Button>
        </div>
    );
}