import type { Metadata } from "next";
import { GeistSans } from "geist/font/sans";
import { cn } from "@/utils/cn";
import "@/styles/globals.css";

import Header from "@/components/layout/Header";
import Footer from "@/components/layout/Footer";
import { ThemeProvider } from "@/providers/theme";
import { getServerSession } from "next-auth";

import SessionProvider from "@/providers/session";

export const metadata: Metadata = {
    title: "Serking de Orayom",
    description: "Web and mobile app developer",
};

export default async function RootLayout({
    children,
}: Readonly<{
    children: React.ReactNode;
}>) {
    const session = await getServerSession();

    return (
        <html lang="en" suppressHydrationWarning>
            <body
                className={cn(
                    "max-w-2xl mx-auto my-10 px-6 dark:bg-[#111010] dark:text-white",
                    GeistSans.className
                )}
            >
                <ThemeProvider
                    attribute="class"
                    defaultTheme="system"
                    enableSystem
                >
                    <SessionProvider session={session}>
                        <Header />
                        <main>{children}</main>
                        <Footer />
                    </SessionProvider>
                </ThemeProvider>
            </body>
        </html>
    );
}
