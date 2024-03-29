import Link from "next/link";
import ThemeToggler from "../ui/ThemeToggler";
import MenuToggler from "../ui/MenuToggler";
import Avatar from "../ui/Avatar";
import { NAVIGATION_LINKS } from "@/utils/consts";

const Header = () => {
    return (
        <header className="mb-12 flex items-center justify-between tracking-tight">
            <nav className="hidden md:flex flex-row space-x-6 pr-10">
                {NAVIGATION_LINKS.map((item) => (
                    <Link
                        key={item.path}
                        href={item.path}
                        className="transition-all hover:text-neutral-400 flex align-middle relative py-1"
                    >
                        {item.label}
                    </Link>
                ))}
            </nav>
            <Avatar />
            <div className="flex gap-x-2.5">
                <MenuToggler />
                <ThemeToggler />
            </div>
        </header>
    );
};

export default Header;
