import React from "react";

const Card = ({ children }: { children: React.ReactNode }) => (
    <div className="border border-neutral-200 dark:border-neutral-700 hover:bg-slate-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 rounded-lg flex items-center justify-between p-3">
        {children}
    </div>
);

export default Card;
